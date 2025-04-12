document.addEventListener('DOMContentLoaded', function() {
    new TypeIt("#typed-text", {
        strings: "Full-stack developer with a focus on scalable and efficient server-side applications.",
        speed: 50,
        waitUntilVisible: true,
    }).go();
});