<?php

namespace App\Http\Livewire\Loans\Sub;

use Livewire\Component;

class Detail extends Component
{
    public $paymentActive = 'active';

    public $scheduleActive = '';
    
    public $businessActive = '';

    public function render()
    {
        return view('livewire.loans.sub.detail');
    }

    public function setAcitve($name) {
        $this->setActiveDefault();
        switch ($name) {
            case "payment": 
                $this->paymentActive = 'active'; 
                $this->emitTo('loans.sub.payment', 'active', true);
                break;
            case "schedule": 
                $this->scheduleActive = 'active'; 
                $this->emitTo('loans.sub.payment-schedule', 'active', true);
                break;
            case "business": 
                $this->businessActive = 'active'; 
                $this->emitTo('loans.sub.business', 'active', true);
                break;
            default: 
                $this->paymentActive = 'active';
                $this->emitTo('business.detail.owner', 'active', true);
        }
    }

    public function setActiveDefault() {
        $this->paymentActive = '';
        $this->emitTo('loans.sub.payment', 'active', false);

        $this->scheduleActive = '';
        $this->emitTo('loans.sub.payment-schedule', 'active', false);

        $this->businessActive = '';
        $this->emitTo('loans.sub.business', 'active', false);
    }
}
