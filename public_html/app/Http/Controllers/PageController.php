<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    private $projects = [
        1 => [
            'title' => 'Library Management System',
            'description' => 'A comprehensive Library Management System built with Java and JavaFX, featuring user authentication, book borrowing/reservation, admin panel, and Google Books API integration.',
            'technologies' => ['Java', 'Spring Boot', 'JavaFX', 'Hibernate', 'JUnit', 'PostgreSQL', 'Google Books API', 'JWT Authentication'],
            'github_url' => 'https://github.com/trangtrieu-code/LMS_V2',
            'live_url' => null, // Desktop application, no live URL
            'main_image' => '/image/lms1.png',
            'purpose' => 'The Library Management System was developed to provide a comprehensive desktop application for managing library operations including user authentication, book cataloging, borrowing/reservation systems, and administrative functions. The objective was to create an intuitive JavaFX-based interface that streamlines library management tasks for both librarians and patrons.',
            'purpose_image1' => '/image/lms2.png',
            'purpose_image2' => '/image/lms3.png',
            'process' => 'Development began with thorough research into Spring Boot architecture, JavaFX UI components, and PostgreSQL database design. Significant time was invested in implementing design patterns (Observer, Strategy, Factory, Singleton, Adapter, Composite) and establishing a secure JWT-based authentication system. The design approach prioritized creating a responsive, user-friendly desktop interface using JavaFX that delivers excellent user experience for library operations.',
            'process_image' => '/image/lms4.png',
            'problems' => 'Major challenges included implementing complex state management across multiple JavaFX controllers, establishing secure database connections with PostgreSQL, and integrating external APIs (Google Books) while maintaining application performance. Managing multiple user roles (admin, librarian, member) and implementing comprehensive borrowing/reservation logic also proved to be technically demanding.',
            'lessons_learned' => 'This project provided extensive learning opportunities in Spring Boot development, JavaFX UI design, and enterprise application architecture. Valuable insights were gained in database design with PostgreSQL, API integration with Google Books, JWT authentication implementation, and applying various design patterns in a real-world application. The project also enhanced understanding of Maven build management and testing with JUnit.'
        ],
        2 => [
            'title' => 'Movie Explorer',
            'description' => 'A movie and TV show discovery platform that is powered by TMDB API.',
            'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Node.js', 'React', 'Tailwind', 'Vercel'],
            'github_url' => 'https://github.com/trangtrieu-code/MovieExplorer',
            'live_url' => 'https://team4-movie-explorer.vercel.app/',
            'main_image' => '/image/me1.png',
            'purpose' => 'MovieExplorer was developed to offer users a comprehensive entertainment discovery platform where they can browse, search, and explore movies and TV shows with advanced filtering options. The objective was to build an intuitive and modern interface that simplifies the process of finding entertainment content.',
            'purpose_image1' => '/image/me2.png',
            'purpose_image2' => '/image/me3.png',
            'process' => 'Development started with thorough research into React 19 latest features and TMDB API documentation. Significant time was invested in understanding React Context API, custom hooks, and modern component architecture. The design approach prioritized creating a responsive, user-friendly interface using Tailwind CSS that delivers excellent user experience.',
            'process_image' => '/image/me4.png',
            'problems' => 'Major challenges included implementing complex state management across numerous components and establishing a secure JWT-based authentication system. Managing multiple API endpoints and handling diverse data structures from TMDB API also proved to be technically demanding.',
            'lessons_learned' => 'This project provided extensive learning opportunities in React 19 development, state management with Context API, and modern frontend architecture. Valuable insights were gained in API integration, authentication implementation, and responsive design using Tailwind CSS framework.'
        ],
        3 => [
            'title' => 'Remax Clone',
            'description' => 'A clone of the Remax website for real estate listings and property management.',
            'technologies' => ['PHP', 'Laravel', 'PHPMyAdmin', 'Web Hosting'],
            'github_url' => 'https://github.com/trangtrieu-jac/realestate',
            'live_url' => 'https://team3.fsd13.ca/',
            'main_image' => '/image/RC.jpg',
            'purpose' => 'The Remax Clone project was created to provide real estate agents with a modern, responsive platform to showcase and manage their properties. The goal was to create an intuitive interface that makes property information easily accessible to potential buyers.',
            'purpose_image1' => '/image/rc1.jpg',
            'purpose_image2' => '/image/rc3.jpg',
            'process' => 'The development process began with extensive research on database management and user experience best practices. A deep process of learning and understanding laravel and its features was done. The design phase focused on creating a clean, modern interface that would be both visually appealing and functional.',
            'process_image' => '/image/rc2.jpg',
            'problems' => 'One of the main challenges was the complexity of the project and the amount of time it took to complete.',
            'lessons_learned' => 'This project was a great learning experience. I learned a lot about laravel and its features. I also learned a lot about database management and user experience best practices.'
        ],
        // Add other projects here...
    ];

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function show($id)
    {
        if (!isset($this->projects[$id])) {
            abort(404);
        }

        return view('show', ['project' => (object)$this->projects[$id]]);
    }

    public function contact()
    {
        return view('contact');
    }
} 