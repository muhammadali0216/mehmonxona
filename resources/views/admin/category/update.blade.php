@extends('layouts.adminLayout')

@section('title')
    Bed Number.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('category.update') }}" method="POST" >
    @method('PUT')
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Category Uz</label>
        <input type="text" name="nameUz" class="form-control" id="specificSizeInputName"placeholder="{{ $caategory->nameUz }}" required>
        <label class="visually-hidden" for="specificSizeInputName">Category En</label>
        <input type="text" name="nameEn" class="form-control" id="specificSizeInputName"placeholder="{{ $caategory->nameEn }}" required>
        <label class="visually-hidden" for="specificSizeInputName">Category Ru</label>
        <input type="text" name="nameRu" class="form-control" id="specificSizeInputName"placeholder="{{ $caategory->nameRu }}" required>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection