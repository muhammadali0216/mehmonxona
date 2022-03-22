<?php 

namespace App\Repositores;

use App\Models\Services;
use App\Repositores\Interfaces\ServicesRepositoreInterface;

class ServicesRepositore implements ServicesRepositoreInterface{
    public function all(){
        return Services::latest()->simplepaginate(5);
    }
    public function store($request){
        $data=$request->all();
        if($request->file('photo')){
            $imag=$request->file('photo');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo']=$imag_name;
        } 
        $data['slug']=\Str::slug($request->price);
        Services::create($data);
        return true;
    }
    public function show($id){
        return Services::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
        $old=Services::find($id);
        if($request->file('photo')){
            $imag=$request->file('photo');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo']=$imag_name;
        }else{
            $data['photo']=$old->photos;
        }
        $data['slug']=\Str::slug($request->price);
        
            return $old->update($data);   
    }
    public function destroy($id){
        return Services::destroy($id);
    }
}