<?php 

namespace App\Repositores;

use App\Models\Room;
use App\Repositores\Interfaces\RoomRepositoreInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Photo;


class RoomRepositore implements RoomRepositoreInterface{
    public function all(){
        return Room::latest()->simplepaginate(5);
    }
    public function store($request){
        $data=$request->all();
        $data['slug']=\Str::slug($request->titleUz);
        $room=Room::create($data);
        $category=$request->category;
        $photo=$request->photos;
        $room->category()->attach($category);
        foreach($photo as $imag){
                $imag_name=time().$imag->getClientOriginalName();
                $imag->move('assets/img/', $imag_name);
                Photo::create(['room_id'=>$room->id, 'photos'=>$imag]);
        }
        return true;
    }
    public function show($id){
        return Room::find($id); 
    }
    public function update($request, $id){
        $data=$request->all();
        $old=Room::find($id);
        $photo=$request->photos;
        if($photo){
            $old->photos()->delete('room_id', $id); 
            foreach($photo as $imag){
                    $imag_name=time().$imag->getClientOriginalName();
                    $imag->move('assets/img/', $imag_name);
                    Photo::create(['room_id'=>$id, 'photos'=>$imag_name]);
            }
           
        }
        
       $category=$request->category;
       $old->category()->sync($category);
        
      
        $data['slug']=\Str::slug($request->titleUz);
        if($request->checkbox==1){    
            return $old->update($data);
        }else{
            $data['checkbox']=null;
            return $old->update($data);
        }
        

    
        
        
    }

    public function destroy($id){
        $room=Room::find($id);
        $room->category($id)->detach();        
        $room->photos()->delete('room_id', $id);        
        return Room::destroy($id);
    }
}