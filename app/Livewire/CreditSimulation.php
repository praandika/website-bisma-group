<?php

namespace App\Livewire;

use Livewire\Component;

class CreditSimulation extends Component
{
    public $downpayment = '';
    public $bunga = '';
    public $harga = '';
    
    public function countCredit(){
        
    }

    public function render()
    {
        return view('livewire.credit-simulation');
    }
}
