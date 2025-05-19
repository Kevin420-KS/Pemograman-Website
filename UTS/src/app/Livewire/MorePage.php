<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LokasiDealer;
use App\Models\KontakSales;

class MorePage extends Component
{
    public function render()
    {
        $lokasiDealers = LokasiDealer::all();
        $kontakSales = KontakSales::all();
        
        return view('livewire.more-page', [
            'lokasiDealers' => $lokasiDealers,
            'kontakSales' => $kontakSales
        ]);
    }
}