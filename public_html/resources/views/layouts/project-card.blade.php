<div class="card h-100 shadow border-0">
    <img src="{{ asset($image) }}" class="card-img-top" alt="{{ $title }}" style="height: 200px; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $title }}</h5>
        <p class="card-text text-muted">{{ $description }}</p>
        <div class="mt-auto">
            <div class="d-flex flex-wrap gap-2">
                @foreach($techStack as $tech)
                    <span class="tech-icon" title="{{ $tech }}">
                        @switch(strtolower($tech))
                            @case('html5')
                                <i class="bi bi-filetype-html fs-2"></i>
                                @break
                            @case('css3')
                                <i class="bi bi-filetype-css fs-2"></i>
                                @break
                            @case('javascript')
                                <i class="bi bi-filetype-js fs-2"></i>
                                @break
                            @case('php')
                                <i class="bi bi-filetype-php fs-2"></i>
                                @break
                            @case('java')
                                <i class="bi bi-filetype-java fs-2"></i>
                                @break
                            @case('mysql')
                                <i class="bi bi-database fs-2"></i>
                                @break
                            @case('react')
                                <i class="bi bi-code-slash fs-2"></i>
                                @break
                            @case('node.js')
                                <i class="bi bi-nodejs fs-2"></i>
                                @break
                            @case('bootstrap')
                                <i class="bi bi-bootstrap fs-2"></i>
                                @break
                            @case('scss')
                                <i class="bi bi-filetype-scss fs-2"></i>
                                @break
                            @case('json')
                                <i class="bi bi-filetype-json fs-2"></i>
                                @break
                            @case('cloud')
                                <i class="bi bi-cloud-arrow-up fs-2"></i>
                                @break
                            @case('react')
                                <i class="bi bi-filetype-jsx"></i>
                                @break
                            @default
                                <i class="bi bi-code-square fs-2"></i>
                        @endswitch
                    </span>
                @endforeach
            </div>
            @if($showButton ?? false)
                <a href="{{ route('projects.show', $id) }}" class="btn btn-outline-primary w-100 mt-3">See More</a>
            @endif
        </div>
    </div>
</div> 