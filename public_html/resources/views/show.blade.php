<x-app-layout>
    <x-slot name="title">Project Details</x-slot>

    <div class="container project-detail mt-4">
        <!-- Back Button -->
        <div class="mb-4">
            <a href="{{ route('projects') }}" class="text-decoration-none text-dark">
                <i class="bi bi-arrow-left me-2"></i>BACK
            </a>
        </div>

        <!-- Project Title -->
        <h1 class="display-4 mb-4">{{ $project->title }}</h1>

        <!-- Project Description -->
        <div class="project-description mb-5">
            <p class="lead">{{ $project->description }}</p>
        </div>

        <!-- Tech Stack & Links -->
        <div class="project-meta row mb-5">
            <div class="col-md-4">
                <h5>TechStack</h5>
                <ul class="list-unstyled">
                    @foreach($project->technologies as $tech)
                    <li>{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Github</h5>
                <a href="{{ $project->github_url }}" class="text-decoration-none text-danger">Repository</a>
            </div>
            <div class="col-md-4">
                <h5>Live</h5>
                <a href="{{ $project->live_url }}" class="text-decoration-none text-danger">View Site</a>
            </div>
        </div>

        <!-- Project Image -->
        <div class="project-image mb-5">
            <img src="{{ asset($project->main_image) }}" alt="{{ $project->title }}" class="img-fluid w-100 rounded">
        </div>

        <!-- Purpose Section -->
        <section class="mb-5">
            <h2 class="h3 mb-4">Purpose of the project</h2>
            <div class="row">
                <div class="col-lg-8">
                    <p>{{ $project->purpose }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset($project->purpose_image1) }}" alt="Purpose illustration 1" class="img-fluid rounded">
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset($project->purpose_image2) }}" alt="Purpose illustration 2" class="img-fluid rounded">
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="mb-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="h3 mb-4">The process</h2>
                    <p>{{ $project->process }}</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset($project->process_image) }}" alt="Process illustration" class="img-fluid rounded">
                </div>
            </div>
        </section>

        <!-- Problems Section -->
        <section class="mb-5">
            <h2 class="h3 mb-4">Problems</h2>
            <div class="row">
                <div class="col-lg-8">
                    <p>{{ $project->problems }}</p>
                </div>
            </div>
        </section>

        <!-- Lessons learned Section -->
        <section class="mb-5">
            <h2 class="h3 mb-4">Lessons learned</h2>
            <div class="row">
                <div class="col-lg-8">
                    <p>{{ $project->lessons_learned }}</p>
                </div>
            </div>
        </section>
    </div>

    <style>
        .project-detail {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .project-image img {
            max-height: 600px;
            object-fit: cover;
        }

        h1, h2, h3, h4, h5 {
            font-weight: 600;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        p {
            color: #4a4a4a;
            line-height: 1.8;
        }
    </style>
</x-app-layout> 