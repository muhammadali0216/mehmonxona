<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Zakaz;

class AdminController extends Controller
{

  public function message(){
      return view('admin.message.index');
  }

  public function coment(){
      return view('admin.coment.index');
  }

  public function zakaz($id){
      $x=Message::find($id);
      $x->check=1;
      $x->save();
      $a=$x->toArray();
      Zakaz::create($a);
      return back()->with('message','Buyurtma qabul qilindi va SMS xabari yuborildi');
  }

  public function delzakaz($zakaz){
    Zakaz::destroy($zakaz->id);
    $zakaz['check']='';
    $x=Message::find($zakaz->id);
    $x->update($zakaz);
    return back()->with('message','Buyurtma bekor qilindi va SMS xabari yuborildi');
  }
   
  public function x(){

    
    $zakazlar=Zakaz::paginate(15);
    return view('admin.zakaz.index', compact('zakazlar'));
  }

}
