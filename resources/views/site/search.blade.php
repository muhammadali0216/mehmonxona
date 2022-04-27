@extends('layouts.siteLayoute')

<!-- Title -->
@section('title')
    Sesrch
@endsection

<!-- Content -->
@section('content')
    @php
        $soni=count($services)+ count($rooms)
    @endphp
    @include('site.sections.intro-single', ['h1'=>__('words.result'), 'span'=>$soni,'layout'=>__('words.search')])    
    @if ($soni>0)
        @include('site.sections.services')
        @include('site.sections.latest')    
    @else
    <div class="section-property section-t8" >
        <div class="container">
            <div class="row" style="padding: 75px 0">
            <div class="col-md-12">
                <div class="title-wrap  justify-content-between">
                <div class="title-box">
                    <h2 style="text-align: center; padding-top: 98px"><span style="color: red;">{{ $key }}</span> <br>
                        Bunday ma'lumot topilmadi :( </h2>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endif
      

@endsection

