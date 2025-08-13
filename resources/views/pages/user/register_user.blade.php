@extends('layout.app')

@section('title', 'User registeration')

@section('style')
    @vite('resources/css/authStyle.css')
@endsection

@section('script')
  @vite('resources/js/authValidation.js')
@endsection

@section('content')


  <div class="registration-card">
  <div class="registration-header">
    <h2>Create Your Account</h2>
    <p>Join the platform that connects people with solutions.</p>
  </div>
  <div class="p-4">
    <form action="/register" method="POST" class="user-registration-form">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control user-input" id="name" name="name" value="{{old('name')}}" required />
        <small class="user-name-error text-danger"></small>
        @error('name')
          <small class="server-error text-danger">{{ $message }}</small>
        @enderror
      </div>

      
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="number" class="form-control user-input" id="phone" name="phone_number" value="{{old('phone_number')}}" required />
        <small class="user-phone-error text-danger"></small>
        @error('phone_number')
          <small class="server-error text-danger">{{ $message }}</small>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-muted">(optional)</span></label>
        <input type="email" class="form-control user-input" id="email" name="email" value="{{old('email')}}" />
        <small class="user-email-error text-danger"></small>
        @error('email')
          <small class="server-error text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control user-input" id="password" name="password" value="{{old('password')}}" required />
        <small class="user-password-error text-danger"></small>
        @error('password')
          <small class="server-error text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control user-input" id="city" name="city" value="{{old('city')}}"  required />
        <small class="user-city-error text-danger"></small>
        @error('city')
          <small class="server-error text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-register">Register</button>
      </div>

      <div>
        @if (session('error'))
            <small class="server-error text-danger">{{ session('error') }}</small>
        @endif
      </div>

    </form>
  </div>
</div>
@endsection