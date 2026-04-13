<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.master');
});

Route::get('/student', function () {
    return view('admin.student');
});

// frontend routes
// Home
Route::get('/home', function () {
    return view('frontend.index');
});

// About
Route::get('/about', function () {
    return view('frontend.about');
});

// Contact
Route::get('/contact', function () {
    return view('frontend.contact');
});

// Course
Route::get('/course-detail', function () {
    return view('frontend.course-detail');
});

// Director
Route::get('/director', function () {
    return view('frontend.director');
});

// Franchise
Route::get('/franchise', function () {
    return view('frontend.franchise-Agreements');
});

Route::get('/franchise-form', function () {
    return view('frontend.franchise-form');
});

// Centers
Route::get('/centers', function () {
    return view('frontend.learningCenters');
});

// Placement
Route::get('/placement', function () {
    return view('frontend.placement');
});

Route::get('/placement-process', function () {
    return view('frontend.placement_process');
});

// Scholarship
Route::get('/scholarship', function () {
    return view('frontend.scholarship');
});

// Student
Route::get('/student-admission', function () {
    return view('frontend.student_admission');
});

Route::get('/student-login', function () {
    return view('frontend.student-login');
});

Route::get('/student-verification', function () {
    return view('frontend.verify-student');
});

Route::get('/certificate', function () {
    return view('frontend.view_certificate');
});

// Job
Route::get('/job', function () {
    return view('frontend.job_app');
});

// Center Login
Route::get('/center-login', function () {
    return view('frontend.centerlogin');
});

// Bank
Route::get('/bank', function () {
    return view('frontend.bank-details');
});