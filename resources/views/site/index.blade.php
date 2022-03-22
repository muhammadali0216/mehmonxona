@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    Home
@endsection

<!-- active -->
@section('index')
    active    
@endsection
<!-- Intro -->
@section('intro')
    @include('site.sections.intro')
@endsection

<!-- Content -->
@section('content')
    @include('site.sections.services')    
    @include('site.sections.latest')    
    @include('site.sections.agents')    
    @include('site.sections.latest-news')    
    @include('site.sections.testimonials')    
@endsection