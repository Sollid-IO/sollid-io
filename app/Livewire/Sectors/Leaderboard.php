<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Leaderboard extends Component
{
    #[Title('Leaderboard')]

    public function render()
    {
        return view('livewire.sectors.leaderboard');
    }
}
