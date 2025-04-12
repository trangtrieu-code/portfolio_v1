<x-app-layout>
    <x-slot name="title">About Me</x-slot>

    <div class="container-fluid">
        <section class="about">
            <div class="d-flex flex-column flex-lg-row justify-content-between flex-grow-1">
                <div class="text-container">
                    <br>
                    <br>
                    <p>I'm passionate about creating web applications and enjoy transforming side projects into functional code.</p>
                    <p>I prioritize thoughtful planning, but also embrace jumping straight into development when inspiration strikes.</p>
                    <p>I'm committed to optimizing performance and delivering a great user experience.</p>
                    <p>Currently, I'm pursuing full-stack development at John Abbott College.</p>
                    <br>
                    <a href="{{ asset('Trang Trieu_CV.pdf') }}" class="btn btn-primary" download="Trang_Trieu_Resume.pdf">
                        <i class="bi bi-file-earmark-text me-2"></i>Get My Resume
                    </a>
                </div>
                
                <div class="image-container">
                    <img src="{{ asset('/image/ELP.jpg') }}" alt="coding corner">
                </div>
            </div>
        </section>
    </div>
</x-app-layout> 