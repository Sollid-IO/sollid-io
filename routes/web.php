<?php

use App\Livewire\Sectors\Dashboard;
use App\Livewire\Sectors\Error404;
use App\Livewire\Sectors\Homepage;
use App\Livewire\Sectors\Leaderboard;
use App\Livewire\Sectors\Lobby;
use App\Livewire\Sectors\PrivacyPolicy;
use App\Livewire\Sectors\Settings;
use App\Livewire\Sectors\TermsOfService;
use App\Livewire\Sectors\Whitepaper;
use Illuminate\Support\Facades\Route;

/**
 * --------------------------------------------------------------------------
 * Primary Domain Routes: {domain}
 * --------------------------------------------------------------------------
 * Public-facing routes for the main landing and legal pages.
 */
Route::domain(config('app.domain'))->name('app.')->group(function () {

    /**
     * Displays the main landing page.
     * 
     * @route GET /
     * @name app.homepage
     */
    Route::get('/', Homepage::class)->name('homepage');

    /**
     * Displays the platform’s whitepaper (includes tokenomics).
     * 
     * @route GET /whitepaper
     * @name app.whitepaper
     */
    Route::get('/whitepaper', Whitepaper::class)->name('whitepaper');

    /**
     * Displays the platform’s game lobby Page.
     * 
     * @route GET /lobby
     * @name app.lobby
     */
    Route::get('/lobby', Lobby::class)->name('lobby');

    /**
     * Displays the user's dashboard View.
     * 
     * @route GET /dashboard
     * @name app.dashboard
     */
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    /**
     * Displays the platform’s games leaderboard Page.
     * 
     * @route GET /leaderboard
     * @name app.leaderboard
     */
    Route::get('/leaderboard', Leaderboard::class)->name('leaderboard');

    /**
     * Displays the user's app settings Page.
     * 
     * @route GET /settings
     * @name app.settings
     */
    Route::get('/settings', Settings::class)->name('settings');

    /**
     * Displays the Terms of Service page.
     * 
     * @route GET /terms-of-service
     * @name app.terms-of-service
     */
    Route::get('/terms-of-service', TermsOfService::class)->name('terms-of-service');

    /**
     * Displays the Privacy Policy page.
     * 
     * @route GET /privacy-policy
     * @name app.privacy-policy
     */
    Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');

    /**
     * Handles unmatched routes within the {app} domain.
     * 
     * @route Fallback
     * @name app.fallback
     */
    Route::fallback(Error404::class)->name('fallback');
});
