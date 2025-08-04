<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class Error404 extends Component
{
    #[Title('Error 404')]

    public function render()
    {
        return view('livewire.sectors.error404');
    }
}
