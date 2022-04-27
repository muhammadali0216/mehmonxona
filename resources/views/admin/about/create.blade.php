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
        @error('photo')
        <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa Uz</label>
        <input type="text" name="titleUz" class="form-control" id="specificSizeInputName"placeholder="Sarlavxa">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa En</label>
        <input type="text" name="titleEn" class="form-control" id="specificSizeInputName"placeholder="Sarlavxa">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa Ru</label>
        <input type="text" name="titleRu" class="form-control" id="specificSizeInputName"placeholder="Sarlavxa">
        @error('titleUz')
        <p class="qizil">{{ $message }}</p>
        @enderror
      </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar Uz</label>
      <input type="text" name="descriptionUz" class="form-control" id="specificSizeInputName" placeholder="Malumotlar">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar En</label>
      <input type="text" name="descriptionEn" class="form-control" id="specificSizeInputName" placeholder="Malumotlar">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar Ru</label>
      <input type="text" name="descriptionRu" class="form-control" id="specificSizeInputName" placeholder="Malumotlar">
      @error('descriptionUz')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection