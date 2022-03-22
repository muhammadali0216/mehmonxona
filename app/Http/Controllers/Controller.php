<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\Messages;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home(){
        return view('site.index');
    }
    public function about(){
        return view('site.about');
    }
    public function property(){
        return view('site.property-grid');
    }
    public function blog(){
        return view('site.blog-grid');
    }
    public function contact(){
        return view('site.contact');
    }
    public function propertySingle(){
        return view('site.property-single');
    }
    public function blogSingle(){
        return view('site.blog-single');
    }
    public function agentsGrid(){
        return view('site.agents-grid');
    }
    public function agentSingle(){
        return view('site.agent-single');
    }
    public function messagestore(Request $request){
        $data=$request->all();
        Mail::to('alimuhammaduzb@gmail.com')->send(new Messages($data));
        Message::create($request->all());
        return back()->with('message', 'Arizangiz yuborildi');
    }
    public function comentstore(Request $request){
        Coment::create($request->all());
        return back();
    }
}
