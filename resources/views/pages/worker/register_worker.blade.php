@extends('layout.app')

@section('title', 'worker registeration')

@section('style')
    @vite('resources/css/signup.css')
@endsection

@section('script')
  @vite('resources/js/authValidation.js')
@endsection

@section('content')

    




    
<!-- signup-section-started  -->
<section class="signup-section">
    <div class="signup-container">
        <!-- <div class="signup-content"> -->
            <h1>Create Your Account</h1>
            <form action="">
                <div class="signup-first-row row">
                <div class="username col-12 col-sm-6 ">
                <label for="">User Name</label>
                <input type="text" name="" id="" placeholder="Username">
                </div>
                <div class="email col-12 col-sm-6 ">
                <label for="">Email</label>
                <input type="text" name="" id="" placeholder="email">
                </div>
                </div>
                <div class="signup-second-row row">
                <div class="pass col-12 col-sm-6 ">
                 <label for="">Password</label>   
                <input type="text" name="" id="" placeholder="password">
                </div>
                <div class="phone col-12 col-sm-6 ">
                <label for="">Phone Number</label>
                <input type="tel" name="" id="" placeholder="Phone number">
                </div>
                </div>
                <div class="signup-third-row row">
                <div class="city col-12 col-sm-6 ">
                <label for="">City</label>
                <input type="text" name="" id="" placeholder="city">
                </div>
                <div class="Cnic col-12 col-sm-6 ">
                <label for="">CNIC Number</label>   
                <input type="text" name="" id="" placeholder="CNIC Number">
                </div>
                </div>
                <div class="signup-foruth-row row">
                <div class="skills col-12 col-sm-6 ">
                <label for="">Skills</label>    
                <select name="" id="">
                    <option value="">I.T Worker</option>
                    <option value="">Electritions</option>
                    <option value="">Nursing staff</option>
                    <option value="">Plumbers</option>
                    <option value="">Mechanics</option>                    
                </select>   
                </div>
                <div class="file col-12 col-sm-6 ">
                <label for="images">Upload CNIC (Front & Back)</label>
                <input type="file" class="file" name="images[]" id="images" multiple accept="image/*">
                </div>
                </div>
                <div class="signup-fifth-row row">
                <div class="signupbtn col-12 col-sm-6 ">
                <input type="submit" value="Register" class="signup-btn">
                </div>
                </div>
            </form>
        <!-- </div> -->
    </div>
</section>
<!-- signup-section-closed  -->



 



@endsection
