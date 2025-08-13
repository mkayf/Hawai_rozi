@extends('layout.app')
@section('title', 'Home')

@section('content')
<<<<<<< HEAD
    @include('components.heroSection')
    {{-- <h2>Welcome to Home Page</h2> --}}
=======
    {{-- account creation success alert --}}
    @if (session('account_created'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <strong>Success!</strong> {{ session('account_created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @include('components.heroSection')
    @include('components.services')
    @include('components.benefits')
>>>>>>> 837d08838e161f6eab006e1e1e24f13a80aaa1b0
@endsection