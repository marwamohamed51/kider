@extends('layouts.main')
@section('content')

    @include('includes.header')

    <!-- About Start -->
    @include('includes.about')
    <!-- About End -->

    <!-- Call To Action Start -->
    @include('includes.callToAction')
    <!-- Call To Action End -->

    <!-- Team Start -->
    @include('includes.team')
    <!-- Team End -->
@endsection
