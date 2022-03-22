@extends('layouts.adminLayout')

@section('title')
    Agents.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Rasm</label>
        <input type="file" name="photos" class="form-control" id="specificSizeInputName">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Ism</label>
        <input type="text" name="name" class="form-control" id="specificSizeInputName"placeholder="Ism">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Familya</label>
        <input type="text" name="surname" class="form-control" id="specificSizeInputName"placeholder="Familya">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Status</label>
        <input type="text" name="status" class="form-control" id="specificSizeInputName"placeholder="Status">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Tel raqmi</label>
      <input type="text" name="phone" class="form-control" id="specificSizeInputName" placeholder="Tel raqmi">
    </div> 
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Email</label>
      <input type="text" name="email" class="form-control" id="specificSizeInputName" placeholder="Email">
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection