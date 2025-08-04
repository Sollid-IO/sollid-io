<nav data-mobile-nav
    class="z-[3000] opacity-0 transition-opacity duration-300 fixed top-[4rem] glass bg-primary/20 p-2 rounded-2xl overflow-y-auto scrollable flex-shrink-0 hidden lg:hidden">
    <div class="flex flex-col gap-2">
        <ul class="menu glass bg-gradient-to-r from-base-200/20 to-primary/8 gap-2 p-2 rounded-box w-full">
            <li>
                <a href="{{ route('app.homepage') }}"
                    class="{{ Route::currentRouteName() === 'app.homepage' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">house</span>
                    Homepage
                </a>
            </li>
        </ul>
        <ul class="menu glass bg-gradient-to-r from-base-200/20 to-primary/8 gap-2 p-2 rounded-box w-full">
            <li>
                <a href="{{ route('app.lobby') }}"
                    class="{{ Route::currentRouteName() === 'app.lobby' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">interests</span>
                    Game Lobby
                </a>
            </li>
            <li>
                <a href="{{ route('app.dashboard') }}"
                    class="{{ Route::currentRouteName() === 'app.dashboard' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">simulation</span>
                    User Console
                </a>
            </li>
            <li>
                <a href="{{ route('app.leaderboard') }}"
                    class="{{ Route::currentRouteName() === 'app.leaderboard' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">crown</span>
                    Leaderboard
                </a>
            </li>
            <li>
                <a href="{{ route('app.settings') }}"
                    class="{{ Route::currentRouteName() === 'app.settings' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">settings_account_box</span>
                    App Settings
                </a>
            </li>
        </ul>
        <ul class="menu glass bg-gradient-to-r from-base-200/20 to-primary/8 gap-2 p-2 rounded-box w-full">
            <li>
                <a href="{{ route('app.terms-of-service') }}"
                    class="{{ Route::currentRouteName() === 'app.terms-of-service' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">balance</span>
                    Browse Terms
                </a>
            </li>
            <li>
                <a href="{{ route('app.privacy-policy') }}"
                    class="{{ Route::currentRouteName() === 'app.privacy-policy' ? 'bg-primary' : '' }} px-2 rounded-xl font-semibold">
                    <span class="material-symbols-rounded">arming_countdown</span>
                    Privacy Policy
                </a>
            </li>
        </ul>
    </div>
</nav>