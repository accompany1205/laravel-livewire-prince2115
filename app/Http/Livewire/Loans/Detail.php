<?php

namespace App\Http\Livewire\Loans;

use Livewire\Component;

class Detail extends Component
{

    public $customerActive = 'active';

    public $profileActive = '';

    public $docActive = '';

    public $hisActive = '';

    public function render()
    {
        return view('livewire.loans.detail');
    }

    public function setAcitve($name) {
        $this->setActiveDefault();
        switch ($name) {
            case "customer": 
                $this->customerActive = 'active'; 
                $this->emitTo('loans.detail.customer', 'active', true);
                break;
            case "profile": 
                $this->profileActive = 'active'; 
                $this->emitTo('loans.detail.profile', 'active', true);
                break;
            case "document": 
                $this->docActive = 'active'; 
                $this->emitTo('loans.detail.document', 'active', true);
                break;
            case "history": 
                $this->hisActive = 'active'; 
                $this->emitTo('loans.detail.history', 'active', true);
                break;
            default: 
                $this->customerActive = 'active';
                $this->emitTo('loans.detail.customer', 'active', true);
        }
    }

    public function setActiveDefault() {
        $this->customerActive = '';
        $this->emitTo('loans.detail.customer', 'active', false);

        $this->profileActive = '';
        $this->emitTo('loans.detail.profile', 'active', false);

        $this->docActive = '';
        $this->emitTo('loans.detail.document', 'active', false);

        $this->hisActive = '';
        $this->emitTo('loans.detail.history', 'active', false);
    }
}
