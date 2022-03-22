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
      <input type="text" name="number" class="form-control" id="number" value=" {{ $room->roomnumber->number }}">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="photo1">Rasim</label>
        <input type="file" name="photo1" class="form-control" id="photo1">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="photo2">Rasim</label>
        <input type="file" name="photo2" class="form-control" id="photo2">
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="photo3">Rasim</label>
        <input type="file" name="photo3" class="form-control" id="photo3">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Oylik ijara narxi</label>
      <input type="text" name="price" class="form-control" id="price" value=" {{ $room->price }}">
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Sarlavxa</label>
      {{-- <input type="text" name="title" class="form-control" id="price" value=" {{ $room->title }}"> --}}
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="price">Mlumotlar</label>
      {{-- <input type="text" name="body" class="form-control" id="price" value=" {{ $room->body }}"> --}}
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="area">Maydoni</label>
      <div class="input-group">
        {{-- <input type="text" name="area" class="form-control" id="area" value=" {{ $room->catigory->name }}"> --}}
        <div class="input-group-text">m<sup>2</sup> </div>
      </div>
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="room_id">Xonalar soni</label>
      <select class="form-select" name="room_id" id="room_id">
        @foreach ($roomnumbers as $number)
        <option value="{{ $number->id }}"> Xonalar sonni {{ $number->number }} ta</option>
        @endforeach
      </select>
    </div>
    <div class="col-sm-3">
      <label class="visually-hidden" for="bed_id">Divanlar soni</label>
      <select class="form-select" name="bed_id" id="bed_id">
        @foreach ($beds as $bed)
        <option value="{{ $bed->id }}">Divanlar soni {{ $bed->number }} ta </option>
        @endforeach
      </select>
    </div>
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