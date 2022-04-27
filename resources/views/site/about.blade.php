@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    aboute
@endsection

<!-- active -->
@section('about')
    active    
@endsection

<!-- Content -->
@section('content')
    @include('site.sections.intro-single', ['h1'=>__('words.ourHotel'), 'span'=>__('words.for'),'layout'=>__('words.about')])
    @include('site.sections.about')
    @include('site.sections.team')
    @include('site.sections.documents')
@endsection