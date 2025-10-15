<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

use App\Livewire\Feed\Index as FeedIndex;
use App\Livewire\Post\Create as CreatePost;
use App\Livewire\Post\View as ViewPost;
use App\Livewire\Post\Edit as EditPost;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
    Route::get('feed', FeedIndex::class)->name('feed');
    Route::prefix('Post/')->group(function(){
        Route::get('Create', CreatePost::class)->name('post.create');
        Route::get('View', ViewPost::class)->name('post.view');
        Route::get('Edit', EditPost::class)->name('post.edit');
    });
});

require __DIR__.'/auth.php';
