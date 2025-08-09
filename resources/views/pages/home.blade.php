@extends('layout.app')

@section('title', 'Home')

@section('content')
    {{-- account creation success alert --}}
    @if (session('account_created'))
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <strong>Success!</strong> {{ session('account_created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @include('components.heroSection')
    @include('components.services')
@endsection