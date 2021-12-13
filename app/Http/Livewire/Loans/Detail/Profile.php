<?php

namespace App\Http\Livewire\Loans\Detail;

use Livewire\Component;

class Profile extends Component
{
    public $active = false;

    protected $listeners = ['active' => 'setActive'];

    public function mount() {
        $this->active = false;
    }

    public function render()
    {
        return view('livewire.loans.detail.profile');
    }

    public function setActive($flag = false) {
        $this->active = $flag;
    }
}
