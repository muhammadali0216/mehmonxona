@extends('layouts.adminLayout')

@section('title')
    Contact.Update
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('contact.update', $id=$info->id) }}" method="POST" enctype="multipart/form-data" >
    @method('PUT')
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa</label>
        <input type="text" name="phone" class="form-control" id="specificSizeInputName"value="{{ $info->phone }}">
        @error('phone')
        <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar</label>
      <input type="text" name="email" class="form-control" id="specificSizeInputName" value="{{ $info->email }}">
      @error('email')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection