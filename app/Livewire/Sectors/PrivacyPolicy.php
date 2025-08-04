<?php

namespace App\Livewire\Sectors;

use Livewire\Attributes\Title;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    #[Title('Privacy Policy')]

    public function render()
    {
        return view('livewire.sectors.privacy-policy');
    }
}
