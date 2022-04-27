<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutStoreRequest;
use App\Repositores\Interfaces\ServicesRepositoreInterface;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $ServicesRepo;

    public function __construct( ServicesRepositoreInterface $ServicesRepositore )
    {
        return $this->ServicesRepo=$ServicesRepositore;
    }
    public function index()
    {
      
        return view('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutStoreRequest $request)
    {
        $this->ServicesRepo->store($request);
        return redirect('/admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=$this->ServicesRepo->show($id);
        
        return view('admin.services.view',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=$this->ServicesRepo->show($id);
        return view('admin.services.update', compact('info'));
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
        $this->ServicesRepo->update($request, $id);
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ServicesRepo->destroy($id);

        return redirect('/admin/service');
    }
}
