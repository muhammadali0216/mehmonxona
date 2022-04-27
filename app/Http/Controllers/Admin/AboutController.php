<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutStoreRequest;
use App\Models\About;
use App\Repositores\Interfaces\AboutRepositoreInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $AboutRepo;

    public function __construct( AboutRepositoreInterface $AboutRepositore )
    {
        return $this->AboutRepo=$AboutRepositore;
    }
    public function index()
    {
      
        return view('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
      
        $this->AboutRepo->store($request);
        
        return redirect('/admin/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=$this->AboutRepo->show($id);
        
        return view('admin.about.view',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=$this->AboutRepo->show($id);
        return view('admin.about.update', compact('info'));
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
            'descriptionUz'=>'required',
            'titleEn'=>'required',
            'descriptionEn'=>'required',
            'titleRu'=>'required',
            'descriptionRu'=>'required',
        ]);
        $this->AboutRepo->update($request, $id);
        return redirect('/admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->AboutRepo->destroy($id);

        return redirect('/admin/about');
    }
}
