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
    @include('site.sections.intro-single')
    @include('site.sections.about')
    @include('site.sections.team')
@endsection