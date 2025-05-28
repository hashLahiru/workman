<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/workman', function () {
    return view('workman');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-inquiry', [InquiryController::class, 'sendInquiry'])->name('send.inquiry');
Route::post('/send-contact', [ContactController::class, 'sendContact'])->name('send.contact');
