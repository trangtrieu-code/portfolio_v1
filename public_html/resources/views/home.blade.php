<x-app-layout>
    <x-slot name="title">Home</x-slot>

    <div class="image-container">
        <img src="{{ asset('/image/header.jpg') }}" alt="Header Picture">
        <div class="gradient"></div>
    </div>

    <div class="home-content">
        <h1>Hi, I'm Trang.</h1>
        <p id="typed-text"></p>
    </div>
</x-app-layout> 