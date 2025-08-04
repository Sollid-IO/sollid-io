<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Logo extends Component
{
    /**
     * The size of the logo.
     *
     * @var string
     */
    public string $size = '';

    /**
     * First part of the app name before the dot.
     *
     * @var string
     */
    public $appNameBefore;

    /**
     * Second part of the app name after the dot.
     *
     * @var string
     */
    public $appNameAfter;

    /**
     * Initialize component state by splitting app name.
     *
     * Example: 'Sollid.IO' → 'Sollid' and 'IO'
     */
    public function mount()
    {
        [$this->appNameBefore, $this->appNameAfter] = explode('.', config('app.name'));
    }

    /**
     * Render the logo view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.partials.logo');
    }
}
