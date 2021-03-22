<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class GetPhone extends Component
{
    public $country_code = 1;
    public $phone;
    protected $listeners = ['submit'];

    public function render()
    {
        return view('livewire.get-phone');
    }

    public function submit()
    {
        Log::info("Phone number submitted: $this->phone");

    }
}
