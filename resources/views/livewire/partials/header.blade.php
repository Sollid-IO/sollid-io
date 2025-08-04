<header class="navbar sticky top-0 z-50 backdrop-blur-2xl rounded-b-2xl">
    <div class="navbar-start">
        <a href="{{ route('app.homepage') }}" class="flex items-center gap-2 text-2xl">
            {{-- App Brand Icon --}}
            <span class="material-symbols-rounded text-primary" style="font-size: 2rem">automation</span>

            {{-- App Logo Partial --}}
            @livewire('partials.logo', ['size' => '2xl'])
        </a>
    </div>

    <div
        class="glass bg-gradient-to-l from-primary/40 to-base-200/80 hidden lg:flex navbar-center items-center gap-10 px-4 py-2 rounded-2xl">
        <a href="https://x.com/Sollid_IO" target="_blank"
            class="flex items-center gap-2 text-sm hover:text-primary transition">
            <span class="material-symbols-rounded">lightning_stand</span>
            About Us
        </a>
        <a href="https://medium.com/@sollid.io" target="_blank"
            class="flex items-center gap-2 text-sm hover:text-primary transition">
            <span class="material-symbols-rounded">newsstand</span>
            Our Blog
        </a>
        <a href="{{ route('app.whitepaper') }}"
            class="{{ Route::currentRouteName() === 'app.whitepaper' ? 'text-primary font-semibold' : 'text-base-content hover:text-primary' }} flex items-center gap-2 text-sm hover:text-primary transition">
            <span class="material-symbols-rounded">bubble_chart</span>
            Whitepaper
        </a>
        <a href="https://discord.gg/vAqWCyec" target="_blank"
            class="flex items-center gap-2 text-sm hover:text-primary transition">
            <span class="material-symbols-rounded">contact_support</span>
            Contact Us
        </a>
    </div>

    <div class="navbar-end gap-3">
        <button
            class="btn btn-sm btn-outline border-base-300 bg-base-100/10 text-base-content font-bold rounded-xl hidden lg:flex">
            $SOLLID ~ 20.83 USD
        </button>

        <button
            class="glass bg-gradient-to-l from-primary/60 to-base-200 btn px-0 overflow-hidden group transition-all duration-500 gap-2 lg:gap-0 lg:hover:gap-2 items-center rounded-3xl">
            <span class="glass bg-primary/10 btn btn-circle">
                <span class="glass bg-primary btn btn-sm btn-circle">
                    <span class="material-symbols-rounded">wallet</span>
                </span>
            </span>
            <span
                class="lg:max-w-0 overflow-hidden lg:group-hover:max-w-xs transition-all duration-500 whitespace-nowrap pr-3 lg:pr-0 lg:group-hover:pr-3 font-semibold">
                Connect Wallet
            </span>
        </button>
    </div>
</header>