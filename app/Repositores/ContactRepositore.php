<?php 

namespace App\Repositores;

use App\Models\Contact;
use App\Repositores\Interfaces\ContactRepositoreInterface;

class ContactRepositore implements ContactRepositoreInterface{
    public function all(){
        return Contact::latest()->simplepaginate(5);
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
        Contact::create($data);
        return true;
    }
    public function show($id){
        return Contact::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
        $old=Contact::find($id);
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
        return Contact::destroy($id);
    }
}