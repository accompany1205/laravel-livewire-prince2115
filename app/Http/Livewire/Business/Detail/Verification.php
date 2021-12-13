<?php

namespace App\Http\Livewire\Business\Detail;

use Livewire\Component;

class Verification extends Component
{
    public $active = false;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = false;
    }
    
    public function render()
    {
        return view('livewire.business.detail.verification');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
