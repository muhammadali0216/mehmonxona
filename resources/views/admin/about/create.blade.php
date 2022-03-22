@extends('layouts.adminLayout')

@section('title')
    Home.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa</label>
        <input type="file" name="photo" class="form-control" id="specificSizeInputName">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa</label>
        <input type="text" name="title" class="form-control" id="specificSizeInputName"placeholder="Sarlavxa">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar</label>
      <input type="text" name="description" class="form-control" id="specificSizeInputName" placeholder="Malumotlar">
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection