<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coment;
use App\Models\Message;
use App\Mail\Messages;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Room;
use App\Models\Services;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function home(Request $request){
        $services=Services::all();
        $rooms=Room::all();
        return view('site.index', compact('rooms','services'));
    }


    public function about(){
        return view('site.about');
    }


    public function property(Request $request){
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
            $rooms=Room::whereIn('id', $ids )->paginate(9);
        }else{
            $rooms = Room::paginate(9);
        }
        return view('site.property-grid', compact('rooms', 'categories'));
    }


    public function contact(){

        $contact=Contact::first();
        return view('site.contact', compact('contact'));
    }


    public function search(Request $request){
        $key=$request->key;
        $rooms=Room::where('titleUz','like', '%'.$key.'%')
        ->orWhere('bodyUz','like', '%'.$key.'%')->get();
        $services=Services::where('titleUz','like','%'.$key.'%')
        ->orWhere('descriptionUz','like','%'.$key.'%')->get();
        return view('site.search',compact('rooms','services','key'));
    }

    public function propertySingle($id){
        $room=Room::find($id);
        $contact=Contact::first();
        return view('site.property-single', compact('room','contact'));
    }

    
    public function messagestore(Request $request){
        $request->validate([
            'pasport'=>'required',
            'phone'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'forstday'=>'required',
            'lastday'=>'required',
        ]);
        $forstday=$request->forstday;
        $lastday=$request->lastday;
        $rooms=Message::where('room', $request->room)->whereNotBetween('forstday', [$forstday, $lastday])->whereNotBetween('lastday', [$forstday, $lastday])->get();
        if(count($rooms)>0){
             return back()->with('rooms',$rooms->all());
        }
        $data=$request->all();
        Mail::to('alimuhammaduzb@gmail.com')->send(new Messages($data));
        Message::create($request->all());
        return back()->with('message', "Arizangiz  yuborildi. Natija SMS xabari ko'rinishida siz qoldirgan raqamga yuboriladi");
    }


    public function comentstore(Request $request){
        $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'name'=>'required',
            'description'=>'required',
        ]);
        Coment::create($request->all());
        return back();
    }
}
