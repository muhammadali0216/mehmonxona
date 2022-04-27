@extends('layouts.adminLayout')

@section('title')
    Contact.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Tel raqm</label>
        <input type="text" name="phone" class="form-control" id="specificSizeInputName"placeholder="Tel raqm">
        @error('phone')
        <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Email</label>
      <input type="text" name="email" class="form-control" id="specificSizeInputName" placeholder="Email">
      @error('email')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection