<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReserveConfirm extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.reserve-confirm');
    }

}
