<?php

namespace App\Http\Livewire\Loans\Sub;

use Livewire\Component;

class PaymentSchedule extends Component
{
    
    public $active = false;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = false;
    }

    public function render()
    {
        return view('livewire.loans.sub.payment-schedule');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
