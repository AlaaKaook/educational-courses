@extends('frontend_layouts.frontend_layout')

@section('title' , 'HOME')

@section('content')

@include('frontend.home_page.hero')

@include('frontend.home_page.card_section')

@include('frontend.home_page.courses_section')

@include('frontend.home_page.search_section')

@include('frontend.home_page.counter_section')

@include('frontend.home_page.service_section')

@include('frontend.home_page.bast_student')

@endsection
