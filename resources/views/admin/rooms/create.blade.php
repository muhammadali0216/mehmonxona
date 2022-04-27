@extends('layouts.adminLayout')

@section('title')
    Home.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf 
    <div class="col-sm-3">
      <label class="visually-hidden" for="number">Xona raqami</label>
      <input type="text" name="number" class="form-control" id="number" placeholder="Xona raqamin">
      @error('number')
      <p class="qizil">{{ $message }}</p>
    @enderror
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="photo[]" >Rasim</label>
        <input type="file" name="photos[]" class="form-control" multiple id="photos[]">
        @error('photos')
          <p class="qizil">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Oylik ijara narxi</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Narxi">
      @error('price')
      <p class="qizil">{{ $message }}</p>
    @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Sarlavxa UZ</label>
      <input type="text" name="titleUz" class="form-control" id="price" placeholder="Sarlavxa UZ">
      <label class="visually-hidden" for="price">Sarlavxa En</label>
      <input type="text" name="titleEn" class="form-control" id="price" placeholder="Sarlavxa En">
      <label class="visually-hidden" for="price">Sarlavxa Ru</label>
      <input type="text" name="titleRu" class="form-control" id="price" placeholder="Sarlavxa Ru">
      @error('titleUz')
      <p class="qizil">{{ $message }}</p>
    @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Mlumotlar Uz</label>
      <input type="text" name="bodyUz" class="form-control" id="price" placeholder="Malumotlari Uz">
      <label class="visually-hidden" for="price">Mlumotlar En</label>
      <input type="text" name="bodyEn" class="form-control" id="price" placeholder="Malumotlari En">
      <label class="visually-hidden" for="price">Mlumotlar Ru</label>
      <input type="text" name="bodyRu" class="form-control" id="price" placeholder="Malumotlari Ru">
      @error('bodyUz')
      <p class="qizil">{{ $message }}</p>
    @enderror
    </div>
    @foreach($categories as $items)
    <div class="col-sm-3">
      <label class="visually-hidden" for="room_id">{{ $items->nameUz }}</label>
      <select class="form-select" name="category[]" id="{{ $items->nameUZ.'_'.$items->id }}">
        @foreach ($items->items as $value)
        <option value="{{ $value->id }}">  {{ $value->nameUz }}</option>
        @endforeach
      </select>
    </div>
    @endforeach
    <div class="col-auto">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox" id="autoSizingCheck2" value="1">
        <label class="form-check-label" for="autoSizingCheck2">
          Bosh saxifada ko'rsatish
        </label>
      </div>
    </div> 
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection