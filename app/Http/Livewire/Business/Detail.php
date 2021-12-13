<?php

namespace App\Http\Livewire\Business;

use Livewire\Component;

class Detail extends Component
{   
    public $ownerActive = 'active';

    public $verifyActive = '';
    
    public $businessActive = '';

    public function render()
    {
        return view('livewire.business.detail');
    }

    public function setAcitve($name) {
        $this->setActiveDefault();
        switch ($name) {
            case "owner": 
                $this->ownerActive = 'active'; 
                $this->emitTo('business.detail.owner', 'active', true);
                break;
            case "verify": 
                $this->verifyActive = 'active'; 
                $this->emitTo('business.detail.verification', 'active', true);
                break;
            case "business": 
                $this->businessActive = 'active'; 
                $this->emitTo('business.detail.business', 'active', true);
                break;
            default: 
                $this->ownerActive = 'active';
                $this->emitTo('business.detail.owner', 'active', true);
        }
    }

    public function setActiveDefault() {
        $this->ownerActive = '';
        $this->emitTo('business.detail.owner', 'active', false);

        $this->verifyActive = '';
        $this->emitTo('business.detail.verification', 'active', false);

        $this->businessActive = '';
        $this->emitTo('business.detail.business', 'active', false);
    }

}
