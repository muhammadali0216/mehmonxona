@extends('layouts.adminLayout')

@section('title')
      Admin.Home
@endsection
{{-- @php
    
    if($get->all){
         $room=$get ;
    }
    else
    {
       $room=$all ;
    }  
@endphp --}}

@section('content')
    @livewire('index-livewire',['rooms'=>$rooms, 'beds'=>$beds, 'roomnumber'=>$roomnumber])
@endsection