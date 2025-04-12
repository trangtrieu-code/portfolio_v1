<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/cron', function() {
    if(request()->get('token') !== ('CRON_JOB_TOKEN')) {
        abort(403, 'Unauthorized');
    }
    // run the queue worker with --stop-when-empty
    Artisan::call('queue:work --stop-when-empty');
    return response('Queue processed successfully!');
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PageController::class, 'show'])->name('projects.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
