<?php 

namespace App\Repositores;

use App\Models\About;
use App\Repositores\Interfaces\AboutRepositoreInterface;

class AboutRepositore implements AboutRepositoreInterface {
    public function all(){
        return About::latest()->simplepaginate(5);
    }
    public function store($request){
        $data=$request->all();

        if($request->file('photo')){
            $imag=$request->file('photo');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo']=$imag_name;
        } 
        About::create($data);
        return true;
    }
    public function show($id){
        return About::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
       
        $photo=About::find($id);
        if($request->file('photo')){ 
            $imag=$request->file('photo');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo']=$imag_name;
        }else{
            $data['photo']=$photo->photo;
        }
        $old=About::find($id);
        return $old->update($data);
    }   
   
    public function destroy($id){
        return  About::destroy($id);
    }
}