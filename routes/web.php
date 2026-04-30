<?php

use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Service\Service;
use App\Service\Notification;
use App\Service\Transistor;
use App\Service\Helper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/service-test', function () {
    // Test Singleton (Transistor)
    $singleton1 = app(Transistor::class);
    $singleton2 = app(Transistor::class);

    $bind1 = app(Notification::class);
    $bind2 = app(Notification::class);

    $scoped1 = app(Helper::class);
    $scoped2 = app(Helper::class);

    $singletonRes = ($singleton1 === $singleton2) ? "YES" : "NO";
    $bindRes = ($bind1 === $bind2) ? "YES" : "NO";
    $scopedRes = ($scoped1 === $scoped2) ? "YES" : "NO";

    return "服務綁定結果:<br>" .
           "1. Singleton: " . $singletonRes . "<br>" .
           "2. Bind: " . $bindRes . "<br>" .
           "3. Scoped: " . $scopedRes;
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return redirect()->route('dashboard');
// })->middleware(['auth', 'verified'])->name('home');

// Route::get('/mcd-example', function () {
//     return view('mcd-example');
// })->middleware(['auth', 'verified'])->name('mcd.example');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/podcasts/{id}', [PodcastController::class, 'show'])->name('podcasts.show');

// Route::get('/service', function (App\Service\Service $service) {
//     return view('service-page', [
//         'msg1' => $service->getMessage(),
//         'msg2' => $service->getMessage2(),
//     ]);
// });


Route::get('/broadcast', function (Transistor $transistor) {
    $podcast = "laravel dependency injection";
    return $transistor->broadcast($podcast);
});

Route::get('/check', function () {
    $firstInstance = app(Transistor::class);
    $secondInstance = app(Transistor::class);
    $res = $firstInstance === $secondInstance ? "Yes" : "No";
    return "Are both instance the same? " . $res;
});

Route::get('/notify', function (Notification $notification) {
    return $notification->send("Laravel is awesome!");
});

require __DIR__.'/auth.php';
