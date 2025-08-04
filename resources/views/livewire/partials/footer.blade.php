<footer
    class="hidden lg:flex items-center justify-between text-sm font-light glass p-4 rounded-2xl bg-gradient-to-l from-primary/20 to-base-200/80">
    {{-- Copyright Section --}}
    <p>
        © {{ date('Y') }}
        <a href="{{ config('app.url') }}" class="font-medium">
            {{-- App Logo Partial --}}
            @livewire('partials.logo')
        </a>
        - All Rights Reserved.
    </p>

    <div class="flex items-center gap-2">
        <a href="https://x.com/Sollid_IO" target="_blank"
            class="btn btn-sm btn-square rounded-xl border-primary bg-primary/20 hover:text-primary">
            <i class="bi bi-twitter-x"></i>
        </a>
        <a href="https://telegram.org" target="_blank"
            class="btn btn-sm btn-square rounded-xl border-primary bg-primary/20 hover:text-primary">
            <i class="bi bi-telegram"></i>
        </a>
        <a href="https://instagram.com" target="_blank"
            class="btn btn-sm btn-square rounded-xl border-primary bg-primary/20 hover:text-primary">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://tiktok.com" target="_blank"
            class="btn btn-sm btn-square rounded-xl border-primary bg-primary/20 hover:text-primary">
            <i class="bi bi-tiktok"></i>
        </a>
        <a href="https://youtube.com/@sollid_io?si=48fRqM4g5mP1y_ja" target="_blank"
            class="btn btn-sm btn-square rounded-xl border-primary bg-primary/20 hover:text-primary">
            <i class="bi bi-youtube"></i>
        </a>
    </div>
</footer>