<?php

namespace App\Http\Livewire\Loans\Detail;

use Livewire\Component;

class History extends Component
{
    public $active = false;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = false;
    }
    
    public function render()
    {
        return view('livewire.loans.detail.history');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
