<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- bootstrap-cdn-link  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<<<<<<< HEAD
=======
    {{-- AOS-Animation-link --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
>>>>>>> 8e00b593057412f5d7fdb4fe65d567bf5adbd884

    {{-- app.css --}}
    @vite('resources/css/app.css')

    {{-- custome style for each page --}}
    @yield('style')

    <!-- footer-css-link  -->
    @vite('resources/css/footer.css')

<<<<<<< HEAD
    <!-- hero-section-css-link  -->
    @vite('resources/css/heroSection.css')

    <!-- services-section-css-link  -->
    @vite('resources/css/services.css')

    
    <!-- services-section-css-link  -->
    @vite('resources/css/benefits.css')

=======
     <!-- hero-section-css-link  -->
    @vite('resources/css/heroSection.css')

>>>>>>> 8e00b593057412f5d7fdb4fe65d567bf5adbd884
    <!-- font-awesome-cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head> 
<body>

    @include('components.navbar')

    @yield('content')
<<<<<<< HEAD
    
    @include('components.footer')
    
=======

    @include('components.footer')
    

>>>>>>> 8e00b593057412f5d7fdb4fe65d567bf5adbd884
    {{-- bootstrap-js-link  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    {{-- app.js --}}
    @vite('resources/js/app.js')
    {{-- custom script for each page --}}
    @yield('script')
    {{-- AOS-Animation-script --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
{{-- Counter-Animation-Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        let countersStarted = false; // Prevents restarting when scrolling back

        const startCounters = () => {
            counters.forEach(counter => {
                counter.innerText = '0';
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const increment = target / 200;

                    if (count < target) {
                        counter.innerText = `${Math.ceil(count + increment)}`;
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countersStarted) {
                    startCounters();
                    countersStarted = true; // Prevent running multiple times
                }
            });
        }, { threshold: 0.5 }); // Trigger when 50% of the section is visible

        // Observe the section containing the counters
        const counterSection = document.querySelector('.counter-section');
        if (counterSection) {
            observer.observe(counterSection);
        }
    });
</script>


</body>
</html>