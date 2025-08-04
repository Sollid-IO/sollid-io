<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('User Console')]

    public function render()
    {
        return view('livewire.sectors.dashboard');
    }
}
