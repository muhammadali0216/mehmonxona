@extends('layouts.adminLayout')

@section('title')
    Bed Number.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('item.store') }}" method="POST" >
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="item">Item Uz</label>
        <input type="text" name="nameUz" class="form-control" id="item"placeholder="Item Uz" required>
        <label class="visually-hidden" for="item">Item En</label>
        <input type="text" name="nameEn" class="form-control" id="item"placeholder="Item En" required>
        <label class="visually-hidden" for="item">Item Ru</label>
        <input type="text" name="nameRu" class="form-control" id="item"placeholder="Item Ru" required>
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="tur">Tur nomi</label>
        <select class="form-select" name="category_id" id="tur">
            @foreach ($categories as $category)    
            <option value="{{$category->id}}"> {{ $category->nameUz }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection