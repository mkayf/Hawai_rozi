@extends('layout.app')
@section('title', 'Home')

@section('content')
    {{-- account creation success alert --}}
    @if (session('account_created'))
        <div class="alert alert-success alert-dismissible fade show mb-0 rounded-0" role="alert">
            {{ session('account_created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- login success alert --}}
    @if (session('login_success'))
        <div class="alert alert-success alert-dismissible fade show mb-0 rounded-0" role="alert">
            {{ session('login_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- logout success alert --}}
    @if (session('logged_out'))
        <div class="alert alert-success alert-dismissible fade show mb-0 rounded-0" role="alert">
            {{ session('logged_out') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @include('components.heroSection')
    @include('components.services')
    @include('components.callToAction')
    @include('components.benefits')
@endsection