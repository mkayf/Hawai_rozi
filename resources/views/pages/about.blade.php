{{-- @extends('layout.app')

@section('title', 'About')

@section('content')
<div class="container mt-5">
    <h1>About Our Web App</h1>
    <p>This is a powerful Laravel-based web application created for managing [Your Purpose].</p>
    <p>Built with ❤️ using Laravel, Bootstrap, and other modern technologies.</p>
</div>
@endsection --}}

@extends('layout.app') {{-- Or use your layout file --}}

@section('title', 'About Us')

@section('content')
<!-- Hero Section -->
<section class="bg-gray-900 text-white py-20">
    <div class="container mx-auto text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">About Us</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">We’re building something amazing with Laravel & Tailwind — connecting people and solutions.</p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white text-gray-800">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <p class="text-lg leading-relaxed">Our mission is to simplify life by providing top-notch digital services. We believe in clean code, powerful design, and meaningful impact.</p>
        </div>
        <img src="https://source.unsplash.com/600x400/?mission,team" alt="Mission" class="rounded-lg shadow-lg" data-aos="zoom-in">
    </div>
</section>

<!-- Timeline Section -->
<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Our Journey</h2>
        <div class="space-y-12 max-w-3xl mx-auto">
            <div data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-semibold">🚀 Idea Launched</h3>
                <p>Started with a simple idea in 2024: make service platforms more human-friendly.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold">👥 Team Expansion</h3>
                <p>Added amazing people to the team to scale and innovate together.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold">📈 Growth Phase</h3>
                <p>Gained users, solved real problems, and built strong community trust.</p>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts Counters -->
<section class="py-20 bg-white text-center">
    <div class="container mx-auto grid md:grid-cols-3 gap-8" data-aos="fade-up">
        <div>
            <h3 class="text-4xl font-bold text-indigo-600 counter" data-target="1000">0</h3>
            <p class="mt-2 text-gray-600">Users Joined</p>
        </div>
        <div>
            <h3 class="text-4xl font-bold text-indigo-600 counter" data-target="24">0</h3>
            <p class="mt-2 text-gray-600">Hours Support</p>
        </div>
        <div>
            <h3 class="text-4xl font-bold text-indigo-600 counter" data-target="500">0</h3>
            <p class="mt-2 text-gray-600">Projects Served</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-indigo-600 text-white py-16 text-center">
    <div class="container mx-auto" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-4">Want to be part of something big?</h2>
        <p class="mb-6">Let’s work together to build the future!</p>
        <a href="/contact" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-100 transition">Contact Us</a>
    </div>
</section>
@endsection
