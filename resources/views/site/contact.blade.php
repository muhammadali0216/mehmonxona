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
    @include('site.sections.intro-single', ['h1'=>__('words.contact'), 'span'=>__('words.forMassage'),'layout'=>__('words.contact')])    
    @include('site.sections.contact-single')    
@endsection