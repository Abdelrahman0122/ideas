<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\IdeaLikeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashboardController::class, 'home'])->name('home');

Route::resource('ideas', IdeaController::class)->except(['index'])->middleware(['auth']);

Route::resource('ideas', IdeaController::class)->only(['show']);

Route::resource('ideas.comments', CommentController::class)->only('store')->middleware(['auth']);

Route::resource("users", UserController::class)->only(['edit', 'update'])->middleware(['auth']);
Route::resource("users", UserController::class)->only(['show']);


Route::get('profile', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');

Route::post('users/{user}/follow', [FollowerController::class, 'follow'])
    ->middleware(['auth'])->name('users.follow');

Route::post('users/{user}/unfollow', [FollowerController::class, 'unfollow'])
    ->middleware(['auth'])->name('users.unfollow');


Route::post('ideas/{idea}/like', [IdeaLikeController::class, 'like'])
    ->middleware(['auth'])->name('ideas.like');

Route::post('ideas/{idea}/unlike', [IdeaLikeController::class, 'unlike'])
    ->middleware(['auth'])->name('ideas.unlike');


require __DIR__ . '/auth.php';


Route::get('/terms', [DashboardController::class, 'terms'])->name('terms');
