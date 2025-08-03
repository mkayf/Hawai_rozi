@extends('layout.app')

@section('title', 'User login')

@section('style')
    @vite('resources/css/authStyle.css')
@endsection

@section('script')
  @vite('resources/js/authValidation.js')
@endsection

@section('content')
    <div class="login-card mx-auto my-5">
  <div class="login-header text-center">
    <h2>Welcome Back</h2>
    <p>Login to continue to Hawai Rozi</p>
  </div>
  <div class="p-4">
    <form action="" method="POST" class="user-login-form">
      @csrf

      <div class="mb-3">
        <label for="email_or_phone" class="form-label">Email or Phone Number</label>
        <input type="text" class="form-control user-login-input" id="email_or_phone" name="email_or_phone" placeholder="example@example.com or 03XX-XXXXXXX" />
        <small class="user-login-identity-error text-danger"></small>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control user-login-input" id="password" name="password" placeholder="Enter password" />
        <small class="user-login-password-error text-danger"></small>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-login">Login</button>
      </div>
    </form>
  </div>
</div>

@endsection
    