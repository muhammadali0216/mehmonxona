@extends('layouts.adminLayout')

@section('title')
    Room Nummber.Create
@endsection

@section('content')
  <form class="row gx-3 gy-2 align-items-center" style="margin: 5px;" action="{{ route('roomnumber.store') }}" method="POST" >
    @csrf 
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Xonalar soni</label>
        <input type="text" name="number" class="form-control" id="specificSizeInputName"placeholder="Xonalar soni">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
  </form>
@endsection