<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PenjualanMobil;
use Illuminate\Support\Facades\DB;

class AboutPage extends Component
{
    public function render()
    {
        // Get aggregated brand data with total sales per region
        $brands = PenjualanMobil::with('brandMobil')
            ->select('brand_mobil_id', 'daerah', DB::raw('SUM(terjual) as total_terjual'))
            ->groupBy('brand_mobil_id', 'daerah')
            ->get()
            ->map(function ($item) {
                return (object) [
                    'nama' => $item->brandMobil->nama_brand,
                    'total_terjual' => $item->total_terjual,
                    'daerah' => $item->daerah
                ];
            });

        return view('livewire.about-page', compact('brands'));
    }
}