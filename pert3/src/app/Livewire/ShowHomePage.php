<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Footer;

class ShowHomePage extends Component {
    
    public $foot;

    public function mount (){
        $this->foot = Footer::first();
    }

    public function render(){
        return view('livewire.show-home-page', ['footer' => $this->foot]);
    }
}
