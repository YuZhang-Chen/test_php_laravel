<?php

use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Service\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/mcd-example', function () {
    return view('mcd-example');
})->middleware(['auth', 'verified'])->name('mcd.example');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/podcasts/{id}', [PodcastController::class, 'show'])->name('podcasts.show');

Route::get('/service', function (App\Service\Service $service) {
    return view('service-page', [
        'msg1' => $service->getMessage(),
        'msg2' => $service->getMessage2(),
    ]);
});


require __DIR__.'/auth.php';