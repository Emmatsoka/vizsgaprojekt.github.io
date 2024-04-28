<?php
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BaratController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('oldalak.fooldal');
});

Route::get('/fooldal', function () {
    return view('oldalak.fooldal');
});
Route::get('/elerhetoseg', function () {
    return view('oldalak.elerhetoseg');
});
Route::get('/adatvedelem', function () {
    return view('oldalak.adatvedelem');
});
Route::get('/projekt', function () {
    return view('oldalak.projekt');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/vedelem', [ProfileController::class, 'vedelem'])->name('profile.vedelem');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/profilkep', [ProfileController::class, 'profilkep'])->name('profile.profilkep');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/kereses', [ProfileController::class, 'search'])->name('search');

    Route::get('/profilok', [ProfileController::class, 'showAllUsers']);
    Route::get('/profil/{username}', [ProfileController::class, 'show'])->name('profil');
    Route::post('/tema', [ProfileController::class, 'tema'])->name('tema');


    Route::get('/dashboard', [PostController::class, 'index']);
    Route::get('/bejegyzes', [PostController::class, 'create']);
    Route::post('/bejegyzes', [PostController::class, 'store'])->name('post.store');
    Route::get('/bejegyzes/{post}/szerkesztes', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/bejegyzes/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/bejegyzes/{id}', [PostController::class, 'show'])->name('post.show');
    Route::post('/like/add', [LikeController::class, 'likeHozzaadas'])->name('like.add');

    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
    Route::get('/tema', function () {
        return view('profile.tema');
    });
    Route::get('/baratok', function () {
        return view('baratok');
    });
});





require __DIR__.'/auth.php';


