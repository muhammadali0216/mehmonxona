<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

  public function message(){
      return view('admin.message.index');
  }
  public function coment(){
      return view('admin.coment.index');
  }
}
