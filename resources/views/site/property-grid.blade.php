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
    @include('site.sections.intro-single')    
    @include('site.sections.property-grid')    
@endsection