@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    contact
@endsection

<!-- active -->
@section('contact')
    active    
@endsection


<!-- Content -->
@section('content')
    @include('site.sections.intro-single')    
    @include('site.sections.contact-single')    
@endsection