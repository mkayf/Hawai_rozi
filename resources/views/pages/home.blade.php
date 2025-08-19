@extends('layout.app')
@section('title', 'Home')

@section('content')
    @include('components.heroSection')
    @include('components.services')
    @include('components.callToAction')
    @include('components.benefits')
@endsection