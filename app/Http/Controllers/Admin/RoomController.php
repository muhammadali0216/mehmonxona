<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomStoreRequest;
use App\Models\Category;
use App\Models\Room;
use App\Repositores\Interfaces\RoomRepositoreInterface;
use Illuminate\Http\Request;
use App\Models\ProductFilter;

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
        $categories=Category::all();
        $key=$request->key;
        $category=$request->category;
        $ids=[];
        if($category){
                $filters=\App\Models\Category_item::find($request->category);
                foreach ($filters as $filter) {
                    foreach($filter->rooms as $room){
                        array_push($ids, $room->id);
                    }
                }
                $rooms=Room::whereIn('id',$ids)->paginate(10);
        }else{
            $rooms = Room::paginate(10);
        }
       
        if($key >= 1){
            $rooms=Room::where('titleUz','like', '%'.$key.'%')
            ->orWhere('bodyUz','like', '%'.$key.'%')->get();
        }

        return view('admin.rooms.index', compact('rooms','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.rooms.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomStoreRequest $request)
    {
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
        $categories=Category::all();
        $room=$this->RoomRepo->show($id);
        return view('admin.rooms.update', compact('room','categories'));
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
        $request->validate([
            'titleUz'=>'required',
            'bodyUz'=>'required',
            'titleEn'=>'required',
            'bodyEn'=>'required',
            'titleRu'=>'required',
            'bodyEn'=>'required',
            'price'=>'required',
            'number'=>'required',
        ]);
        $this->RoomRepo->update($request, $id);
        return redirect('/admin/room');
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
        return redirect('/admin/room');
    }
    
}
