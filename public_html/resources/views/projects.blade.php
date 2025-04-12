<x-app-layout>
    <x-slot name="title">Projects</x-slot>

    <div class="container-fluid py-5">
       
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 px-4">

            <div class="col">
                <div class="h-100">
                    @include('layouts.project-card', [
                        'title' => 'Library Management System',
                        'description' => 'A Library Management System tracking all the library items',
                        'techStack' => ['Java'],
                        'image' => '/image/lms1.png',
                        'id' => 1,
                        'showButton' => true
                    ])
                </div>
            </div>

            <div class="col">
                <div class="h-100">
                    @include('layouts.project-card', [
                        'title' => 'Movie Explorer',
                        'description' => 'A movie and TV show discovery platform that is powered by TMDB API.',
                        'techStack' => ['HTML5', 'CSS3', 'JavaScript', 'Node.js', 'React', 'Cloud'],
                        'image' => '/image/me1.png',
                        'id' => 2, 
                        'showButton' => true
                    ])
                </div>
            </div>

            <div class="col">
                <div class="h-100">
                    @include('layouts.project-card', [
                        'title' => 'Remax Clone',
                        'description' => 'A Remax website clone for real estate listings and property management.',
                        'techStack' => ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL', 'Cloud'],
                        'image' => '/image/RC.jpg',
                        'id' => 3,
                        'showButton' => true
                    ])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>