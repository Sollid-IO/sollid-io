<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Lobby extends Component
{
    #[Title('Game Lobby')]

    public function render()
    {
        return view('livewire.sectors.lobby');
    }
}
