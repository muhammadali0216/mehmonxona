@extends('layouts.adminLayout')

@section('title')
    Home.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('room.update', $room->id) }}" method="POST" enctype="multipart/form-data" >
    @method('PUT')
    @csrf 
    <div class="col-sm-3">
      <label class="visually-hidden" for="number">Xona raqami</label>
      <input type="text" name="number" class="form-control" id="number" value=" {{ $room->number }}">
      @error('number')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="photos[]">Rasim</label>
        <input type="file" name="photos[]" multiple class="form-control" id="photos[]">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Oylik ijara narxi</label>
      <input type="text" name="price" class="form-control" id="price" value=" {{ $room->price }}">
      @error('price')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Sarlavxa Ru</label>
      <input type="text" name="titleUz" class="form-control" id="price" value=" {{ $room->titleUz }}">
      <label class="visually-hidden" for="price">Sarlavxa EN</label>
      <input type="text" name="titleEn" class="form-control" id="price" value=" {{ $room->titleEn }}">
      <label class="visually-hidden" for="price">Sarlavxa Ru</label>
      <input type="text" name="titleRu" class="form-control" id="price" value=" {{ $room->titleRu }}">
      @error('titleUZ')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Malumotlar Uz</label>
      <input type="text" name="bodyUz" class="form-control" id="price" value=" {{ $room->bodyUz }}">
      <label class="visually-hidden" for="price">Malumotlar EN</label>
      <input type="text" name="bodyEn" class="form-control" id="price" value=" {{ $room->bodyEn }}">
      <label class="visually-hidden" for="price">Malumotlar RU</label>
      <input type="text" name="bodyRu" class="form-control" id="price" value=" {{ $room->bodyRu }}">
      @error('bodyUZ')
      <p class="qizil">{{ $message }}</p>
      @enderror
    </div>
    @foreach($categories as $items)
    <div class="col-sm-3">
      <label class="visually-hidden" for="room_id">{{ $items->nameUz }}</label>
      <select class="form-select" name="category[]" id="{{ $items->nameUz.'_'.$items->id }}">
        @foreach ($items->items as $value)
        <option value="{{ $value->id }}">  {{ $value->nameUz }} </option>
        @endforeach
      </select>
    </div>
    @endforeach
    <div class="col-auto">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox" id="autoSizingCheck2" value="1"{{ $room->checkbox ? 'checked' : '' }}>
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