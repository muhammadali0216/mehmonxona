@extends('layouts.adminLayout')

@section('title')
    Agents.Update
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('agents.update', $id=$agent->id) }}" method="POST" enctype="multipart/form-data" >
    @method('PUT')
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Rasm</label>
        <input type="file" name="photos" class="form-control" id="specificSizeInputName">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Ism</label>
        <input type="text" name="name" class="form-control" id="specificSizeInputName"value="{{ $agent->name }}">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Familya</label>
        <input type="text" name="surname" class="form-control" id="specificSizeInputName"value="{{ $agent->surname }}">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa</label>
        <input type="text" name="status" class="form-control" id="specificSizeInputName"value="{{ $agent->status }}">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Tel raqmi</label>
      <input type="text" name="phone" class="form-control" id="specificSizeInputName" value="{{ $agent->phone }}">
    </div> 
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Email</label>
      <input type="text" name="email" class="form-control" id="specificSizeInputName" value="{{ $agent->email }}">
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection