<?php

namespace App\Http\Controllers\Categoryes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category_item;
use App\Models\Room;
use Illuminate\Http\Request;

class Category_itemControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Category_item::all();
        return view('admin.category_items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=Category::all();
        return view('admin.category_items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category_item::create($request->all());
        return redirect('/admin/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Category_item::find($id);
        $categories=Category::all();
        return view('admin.category_items.update', compact('item','categories'));
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
        $item=Category_item::find($id);
        $item->update($request->all());
        return redirect('/admin/item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Category_item::find($id);
        $item->rooms($id)->detach();
        Category_item::destroy($id);
        return back();
    }
}
