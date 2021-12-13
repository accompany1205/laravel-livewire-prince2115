<?php

namespace App\Http\Livewire\Loans\Detail;

use Livewire\Component;

class Customer extends Component
{
    public $active = true;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = true;
    }
    
    public function render()
    {
        return view('livewire.loans.detail.customer');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
