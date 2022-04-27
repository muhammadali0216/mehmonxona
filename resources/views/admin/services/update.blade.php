@extends('layouts.adminLayout')

@section('title')
    Service.Update
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('service.update', $id=$info->id) }}" method="POST" enctype="multipart/form-data" >
    @method('PUT')
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Rasim</label>
        <input type="file" name="photo" class="form-control" id="specificSizeInputName">
        @error('photo')
        <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa Uz</label>
        <input type="text" name="titleUz" class="form-control" id="specificSizeInputName"value="{{ $info->titleUz }}">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa En</label>
        <input type="text" name="titleRu" class="form-control" id="specificSizeInputName"value="{{ $info->titleEn }}">
        <label class="visually-hidden" for="specificSizeInputName">Sarlavxa Ru</label>
        <input type="text" name="titleEn" class="form-control" id="specificSizeInputName"value="{{ $info->titleRu }}">
        @error('titleUz')
        <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar Uz</label>
      <input type="text" name="descriptionUz" class="form-control" id="specificSizeInputName" value="{{ $info->descriptionUz }}">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar En</label>
      <input type="text" name="descriptionEn" class="form-control" id="specificSizeInputName" value="{{ $info->descriptionEn }}">
      <label class="visually-hidden" for="specificSizeInputName">Ma'lumotlar Ru</label>
      <input type="text" name="descriptionRu" class="form-control" id="specificSizeInputName" value="{{ $info->descriptionRu }}">
      @error('descriptionUz')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection

