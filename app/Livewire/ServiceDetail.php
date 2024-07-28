<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ServiceDetail extends Component
{
    public function render(Request $request)
    {

        return view('livewire.service-detail', [
            'service' => $request->service
        ]);
    }
}
