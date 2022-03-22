<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BedNumber;
use App\Models\Catigory;
use App\Models\Room;
use App\Models\RoomNumber;
use App\Repositores\Interfaces\RoomRepositoreInterface;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $RoomRepo;

    public function __construct(RoomRepositoreInterface $RoomRepositore)
    {
        return $this->RoomRepo=$RoomRepositore;
    }
    public function index(Request $request){
        $room=$request->room;
        $bed=$request->bed;
        $search=$request->search;
        $beds=BedNumber::all();
        $roomnumber=RoomNumber::all();

        // $get=Room::Where('room_id',$room)->orWhere('bed_id',$bed)->get();
        // $all=Room::all();
        $rooms = Room::query();
        if($bed){
        $rooms = $rooms->where('bed_id',$bed);
        }
        if($room){
        $rooms = $rooms->where('room_id',$room);
        }
        if($search){
        $rooms = $rooms->where('title',$search)->orWhere('body',$search);
        }
        $rooms=$rooms->get();
        return view('admin.rooms.index', compact('rooms','beds', 'roomnumber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomnumbers=RoomNumber::all();
        $beds=BedNumber::all();
        $categories = Catigory::all();
        return view('admin.rooms.create', compact('roomnumbers' ,'beds','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $this->RoomRepo->store($request);
        return redirect('/admin/room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room=$this->RoomRepo->show($id);
        
        return view('admin.rooms.view',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomnumbers=RoomNumber::all();
        $beds=BedNumber::all();
        $room=$this->RoomRepo->show($id);
        return view('admin.rooms.update', compact('room', 'beds', 'roomnumbers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->RoomRepo->update($request, $id);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->RoomRepo->destroy($id);
        return redirect('/admin');
    }
    
}
