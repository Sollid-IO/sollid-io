<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Whitepaper extends Component
{
    #[Title('Whitepaper')]

    public function render()
    {
        return view('livewire.sectors.whitepaper');
    }
}
