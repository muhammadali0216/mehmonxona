@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    property-single
@endsection
<!-- Content -->
@section('content')
    @include('site.sections.intro-single', ['h1'=>__('words.section'), 'span'=>'','layout'=>__('words.section')])    
    @include('site.sections.property-single')    
@endsection