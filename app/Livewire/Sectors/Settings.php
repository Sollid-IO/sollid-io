<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Settings extends Component
{
    #[Title('App Settings')]

    public function render()
    {
        return view('livewire.sectors.settings');
    }
}
