<?php

namespace App\Http\Livewire\Loans\Sub;

use Livewire\Component;

class Payment extends Component
{
    public $active = true;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = true;
    }

    public function render()
    {
        return view('livewire.loans.sub.payment');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
