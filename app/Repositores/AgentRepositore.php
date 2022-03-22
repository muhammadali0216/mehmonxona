<?php 

namespace App\Repositores;

use App\Models\Agent;
use App\Repositores\Interfaces\AgentRepositoreInterface;

class AgentRepositore implements AgentRepositoreInterface{
    public function all(){
        return Agent::latest()->simplepaginate(5);
    }
    public function store($request){
        $data=$request->all();
        if($request->file('photos')){
            $imag=$request->file('photos');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photos']=$imag_name;
        } 
        $data['slug']=\Str::slug($request->price);
        Agent::create($data);
        return true;
    }
    public function show($id){
        return Agent::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
        $old=Agent::find($id);
        if($request->file('photos')){
            $imag=$request->file('photos');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photos']=$imag_name;
        }else{
            $data['photos']=$old->photos;
        }
        $data['slug']=\Str::slug($request->price);
            return $old->update($data);        
    }
    public function destroy($id){
        return Agent::destroy($id);
    }
}