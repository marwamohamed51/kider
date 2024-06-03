<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

Route::get('/', function () {
    return view('test');
});

Route::get('home', [Frontpages::class, 'home'])->name('home');
Route::get('about', [Frontpages::class, 'about'])->name('about');
Route::get('team', [Frontpages::class, 'team'])->name('team');
Route::get('error', [Frontpages::class, 'error'])->name('error');
Route::get('appointment', [Frontpages::class, 'appointment'])->name('appointment');
Route::get('calltoaction', [Frontpages::class, 'calltoaction'])->name('calltoaction');
Route::get('classes', [Frontpages::class, 'classes'])->name('classes');
Route::get('contact', [Frontpages::class, 'contact'])->name('contact');
Route::get('facility', [Frontpages::class, 'facility'])->name('facility');
Route::get('testimonial', [Frontpages::class, 'testimonial'])->name('testimonial');
