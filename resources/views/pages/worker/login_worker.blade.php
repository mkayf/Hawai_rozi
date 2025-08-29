@extends('layout.app')

@section('title', 'worker registeration')

@section('style')
    @vite('resources/css/login.css')
@endsection

@section('script')
  @vite('resources/js/authValidation.js')
@endsection

@section('content')

    
<!-- login-section-started  -->
<section class="login-section">
    <div class="login-container">
        <!-- <div class="login-content"> -->
            <h1>Worker Login</h1>
            <form action="">
                <input type="text" name="" id="" placeholder="email">
                <input type="text" name="" id="" placeholder="password">
                <input type="submit" value="Login" class="login-btn">
            </form>
        <!-- </div> -->
    </div>
</section>
<!-- login-section-closed  -->


    
@endsection
