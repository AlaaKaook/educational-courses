@extends('frontend_layouts.frontend_layout')

@section('title' , 'HOME')

@section('content')

@include('frontend.pages.hero')

@include('frontend.pages.card_section')

@include('frontend.pages.courses_section')

@include('frontend.pages.search_section')

@include('frontend.pages.counter_section')

@include('frontend.pages.service_section')

@include('frontend.pages.bast_teacher')

@endsection
