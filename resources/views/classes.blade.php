@extends('layouts.main')
@section('content')
    @include('includes.header')

    <!-- Classes Start -->
    @include('includes.classes')
    <!-- Classes End -->


    <!-- Appointment Start -->
    @include('includes.appointment')
    <!-- Appointment End -->

    <!-- Call To Action Start -->
    @include('includes.callToAction')
    <!-- Call To Action End -->

    <!-- Team Start -->
    @include('includes.team')
    <!-- Team End -->
@endsection
