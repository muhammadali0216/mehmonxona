@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    agent-grid
@endsection

<!-- active -->
@section('agents')
    active    
@endsection


<!-- Content -->
@section('content')
    @include('site.sections.intro-single')    
    @include('site.sections.agents-grid')    
@endsection