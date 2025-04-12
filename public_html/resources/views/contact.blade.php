<x-app-layout>
    <x-slot name="title">Contact</x-slot>

    <div class="container-fluid">
        <section class="contact">
            
            <div class="d-flex flex-column flex-lg-row justify-content-between flex-grow-1">
                <div class="contact-content">
                    <h2 class="h4 mb-3">Let's Connect</h2>
                    <p class="mb-3">I'm always interested in hearing about new projects and opportunities. Feel free to reach out!</p>
                    
                    <div class="contact-info">
                        <div class="mb-2">
                            <h3 class="h6 mb-1">Email</h3>
                            <a href="mailto:trang.trieu@hotmail.com" class="text-decoration-none">
                                <i class="bi bi-envelope me-2"></i>trang.trieu@hotmail.com
                            </a>
                        </div>
                        
                        <div>
                            <h3 class="h6 mb-1">GitHub</h3>
                            <a href="https://github.com/trangtrieu-code" target="_blank" class="text-decoration-none">
                                <i class="bi bi-github me-2"></i>github.com/trangtrieu-code
                            </a>
                        </div>
                    </div>
                </div>

                        <div class="image-container">
            <img src="{{ asset('/image/SRS.jpg') }}" alt="Profile Picture of Trang">
        </div>
            </div>
        </section>
    </div>
</x-app-layout> 