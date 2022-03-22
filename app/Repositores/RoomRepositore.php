<?php 

namespace App\Repositores;

use App\Models\Room;
use App\Repositores\Interfaces\RoomRepositoreInterface;

class RoomRepositore implements RoomRepositoreInterface{
    public function all(){
        return Room::latest()->simplepaginate(5);
    }
    public function store($request){
        $data=$request->all();
        if($request->file('photo1')){
            $imag=$request->file('photo1');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo1']=$imag_name;
        } 
        if($request->file('photo2')){
            $imag=$request->file('photo2');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo2']=$imag_name;
        } 
        if($request->file('photo3')){
            $imag=$request->file('photo3');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo3']=$imag_name;
        } 
        $data['slug']=\Str::slug($request->price);

        Room::create($data);
        return true;
    }
    public function show($id){
        return Room::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
        $old=Room::find($id);
        if($request->file('photo1')){
            $imag=$request->file('photo1');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo1']=$imag_name;
        }else{
            
            $data['photo1']=$old->photo1;
        }
        if($request->file('photo2')){
            $imag=$request->file('photo2');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo2']=$imag_name;
        }else{
            
            $data['photo2']=$old->photo2;
        }
        if($request->file('photo3')){
            $imag=$request->file('photo3');
            $imag_name=time().$imag->getClientOriginalName();
            $imag->move('assets/img/', $imag_name);
            $data['photo3']=$imag_name;
        }else{
            
            $data['photo3']=$old->photo3;
        }
        $data['slug']=\Str::slug($request->price);
        if($request->checkbox==1){    
            return $old->update($data);
        }else{
            $data['checkbox']=null;
            return $old->update($data);
        }
        

    
        
        
    }
    public function destroy($id){
        return Room::destroy($id);
    }
}