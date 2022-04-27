@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    property-grid
@endsection

<!-- active -->
@section('property')
    active    
@endsection

<!-- Content -->
@section('content')
    @include('site.sections.intro-single', ['h1'=>__('words.rooms'), 'span'=>'','layout'=>__('words.rooms')])    
    @include('site.sections.property-grid')    
@endsection