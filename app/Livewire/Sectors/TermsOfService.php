<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class TermsOfService extends Component
{
    #[Title('Terms Of Service')]

    public function render()
    {
        return view('livewire.sectors.terms-of-service');
    }
}
