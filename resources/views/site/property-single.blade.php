@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    property-single
@endsection

<!-- Content -->
@section('content')
    @include('site.sections.intro-single')    
    @include('site.sections.property-single')    
@endsection