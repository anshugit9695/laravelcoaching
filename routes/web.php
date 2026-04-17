<?php

use Illuminate\Support\Facades\Route;
// admin route

Route::get('/', function () {
    return view('admin.master');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/center-list', function () {
    return view('admin.center-list');
});
Route::get('/students-form', function () {
    return view('admin.student');
});
Route::get('/all-student', function () {
    return view('admin.all-student');
});
Route::get('/in-active-student', function () {
    return view('admin.in-active-student');
});
Route::get('/passout-student', function () {
    return view('admin.passout-student');
});
Route::get('/course', function () {
    return view('admin.course');
});
Route::get('/test', function () {
    return view('admin.test');
});
Route::get('/question-category', function () {
    return view('admin.question-category');
});
Route::get('/question', function () {
    return view('admin.question');
});
Route::get('/import-question', function () {
    return view('admin.import-question');
});
// ealet nhi bana hai 
Route::get('/employee', function () {
    return view('admin.employee');
});
Route::get('/staff-attendance', function () {
    return view('admin.staff-attendance');
});
Route::get('/enquiry-data', function () {
    return view('admin.enquiry-data');
});
Route::get('/job-data', function () {
    return view('admin.job');
});
Route::get('/contact-enquiry', function () {
    return view('admin.contact-enquiry');
});
Route::get('/create-message', function () {
    return view('admin.create-message');
});
Route::get('/message-student', function () {
    return view('admin.message-student');
});
Route::get('/certificate-requests', function () {
    return view('admin.certificate-requests');
});
Route::get('/elements', function () {
    return view('admin.elements');
});

Route::get('/pdf-notes', function () {
    return view('admin.pdf-notes');
});
Route::get('/video-content', function () {
    return view('admin.video-content');
});
Route::get('/expense', function () {
    return view('admin.expense');
});
Route::get('/category-maker', function () {
    return view('admin.category-maker');
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

Route::get("/student-panel", function () {
    return view('student.master');
});

Route::get("/profile", function () {
    return view('student.profile');
});
Route::get("/fees", function () {
    return view('student.fees');
});