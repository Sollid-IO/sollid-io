<aside class="h-[calc(100vh-4.4rem)] justify-center-safe flex-shrink-0 flex-col gap-3 hidden lg:flex">
    <ul class="menu glass bg-gradient-to-b from-primary/40 to-base-200/80 gap-2 p-2 rounded-box">
        <li>
            <a href="{{ route('app.homepage') }}"
                class="{{ Route::currentRouteName() === 'app.homepage' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Homepage">
                <span class="material-symbols-rounded">house</span>
            </a>
        </li>
    </ul>
    <ul class="menu glass bg-gradient-to-b from-primary/40 to-base-200/80 gap-2 p-2 rounded-box">
        <li>
            <a href="{{ route('app.lobby') }}"
                class="{{ Route::currentRouteName() === 'app.lobby' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Game Lobby">
                <span class="material-symbols-rounded">interests</span>
            </a>
        </li>
        <li>
            <a href="{{ route('app.dashboard') }}"
                class="{{ Route::currentRouteName() === 'app.dashboard' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="User Console">
                <span class="material-symbols-rounded">simulation</span>
            </a>
        </li>
        <li>
            <a href="{{ route('app.leaderboard') }}"
                class="{{ Route::currentRouteName() === 'app.leaderboard' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Leaderboard">
                <span class="material-symbols-rounded">crown</span>
            </a>
        </li>
        <li>
            <a href="{{ route('app.settings') }}"
                class="{{ Route::currentRouteName() === 'app.settings' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Settings">
                <span class="material-symbols-rounded">settings_account_box</span>
            </a>
        </li>
    </ul>
    <ul class="menu glass bg-gradient-to-b from-primary/40 to-base-200/80 gap-2 p-2 rounded-box">
        <li>
            <a href="{{ route('app.terms-of-service') }}"
                class="{{ Route::currentRouteName() === 'app.terms-of-service' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Terms of Service">
                <span class="material-symbols-rounded">balance</span>
            </a>
        </li>
        <li>
            <a href="{{ route('app.privacy-policy') }}"
                class="{{ Route::currentRouteName() === 'app.privacy-policy' ? 'glass' : '' }} px-2 rounded-xl font-semibold tooltip tooltip-right"
                data-tip="Privacy Policy">
                <span class="material-symbols-rounded">arming_countdown</span>
            </a>
        </li>
    </ul>
</aside>