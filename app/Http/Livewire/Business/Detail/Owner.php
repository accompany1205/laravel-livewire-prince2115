<?php

namespace App\Http\Livewire\Business\Detail;

use Livewire\Component;

class Owner extends Component
{
    public $active = true;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = true;
    }
    
    public function render()
    {
        return view('livewire.business.detail.owner');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
