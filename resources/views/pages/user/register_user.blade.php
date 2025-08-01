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
    <form action="" method="POST" class="user-registration-form" onsubmit="return checkValidation()">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control user-input" id="name" name="name" required />
        <small style="color: red" class="user-name-error"></small>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-muted">(optional)</span></label>
        <input type="email" class="form-control user-input" id="email" name="email"  />
        <small class="user-email-error"></small>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control user-input" id="phone" name="phone_number" required />
        <small class="user-phone-error"></small>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control user-input" id="password" name="password"  required />
        <small class="user-password-error"></small>
      </div>

      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control user-input" id="city" name="city"  required />
        <small class="user-city-error"></small>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-register">Register</button>
      </div>
    </form>
  </div>
</div>
@endsection