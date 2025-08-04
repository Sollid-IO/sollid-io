<div class="dock lg:hidden glass bg-gradient-to-l from-primary/40 to-base-200/80 rounded-t-2xl text-center">
    <a href="https://x.com/Sollid_IO" target="_blank">
        <span class="material-symbols-rounded size-[1.2em]">lightning_stand</span>
        <span class="dock-label font-semibold">About</span>
    </a>

    <a href="https://medium.com/@sollid.io" target="_blank">
        <span class="material-symbols-rounded size-[1.2em]">newsstand</span>
        <span class="dock-label font-semibold">Blog</span>
    </a>

    <a href="javascript:void(0);" data-menu-toggler>
        <div class="glass btn bg-primary/20 btn-square rounded-3xl btn-xl">
            <span class="glass btn bg-primary btn-square rounded-3xl">
                <span class="material-symbols-rounded">menu</span>
            </span>
        </div>
    </a>

    <a href="{{ route('app.whitepaper') }}"
        class="{{ Route::currentRouteName() === 'app.whitepaper' ? 'text-primary font-semibold' : 'text-base-content hover:text-primary' }}">
        <span class="material-symbols-rounded size-[1.2em]">bubble_chart</span>
        <span class="dock-label font-semibold">Paper</span>
    </a>

    <a href="https://discord.gg/vAqWCyec" target="_blank">
        <span class="material-symbols-rounded size-[1.2em]">contact_support</span>
        <span class="dock-label font-semibold">Contact</span>
    </a>
</div>