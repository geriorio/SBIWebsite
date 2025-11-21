<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

// Insights Detail Page
Route::get('/insights/{slug}', function ($slug) {
    // Map slug to view file
    $viewPath = "insights.{$slug}";
    
    // Check if view exists, otherwise return 404
    if (!view()->exists($viewPath)) {
        abort(404);
    }
    
    return view($viewPath);
})->name('insights.detail');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Service Detail Pages
Route::get('/services/operational', function () {
    return view('services.operational');
})->name('services.operational');

Route::get('/services/digital', function () {
    return view('services.digital');
})->name('services.digital');

Route::get('/services/data', function () {
    return view('services.data');
})->name('services.data');

Route::get('/services/capability', function () {
    return view('services.capability');
})->name('services.capability');

// Contact Form Submission
Route::post('/contact/submit', function () {
    // Handle contact form submission
    return back()->with('success', 'Thank you! We will get back to you soon.');
})->name('contact.submit');

// API Routes
Route::post('/api/contact', [App\Http\Controllers\ContactFormController::class, 'store']);
Route::post('/api/newsletter', [App\Http\Controllers\NewsletterController::class, 'subscribe']);

// Newsletter count API
Route::get('/api/newsletter-count', function() {
    return response()->json(['count' => App\Models\NewsletterSubscription::count()]);
});

// Test page
Route::get('/test-newsletter', function() {
    return view('test-newsletter');
});
