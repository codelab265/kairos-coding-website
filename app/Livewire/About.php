<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{
    #[Title('About Us')]
    public function render()
    {
        return view('livewire.about');
    }
}
