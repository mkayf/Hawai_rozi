<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap-cdn-link  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    {{-- app.css --}}
    @vite('resources/css/app.css')
<<<<<<< HEAD

    <!-- footer-css-link  -->
    @vite('resources/css/footer.css')

    <!-- font-awesome-cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
=======
    {{-- custome style for each page --}}
    @yield('style')
</head> 
>>>>>>> b1a9f6d00caa9f4b226e06b5fb409899ab9d9ae4
<body>

    @include('components.navbar')

    <div class="container">
        @yield('content')
    </div>

<<<<<<< HEAD
    @include('components.footer')


    {{-- app.js --}}
    @vite('resources/js/app.js')
=======
>>>>>>> b1a9f6d00caa9f4b226e06b5fb409899ab9d9ae4
    {{-- bootstrap-js-link  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    {{-- app.js --}}
    @vite('resources/js/app.js')
    {{-- custom script for each page --}}
    @yield('script')
</body>
</html>