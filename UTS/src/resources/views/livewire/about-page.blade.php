<div> {{-- <== Tambahkan ini untuk membungkus semua konten --}}

    @php
        $groupedBrands = collect($brands)->groupBy('daerah');
    @endphp

    @foreach($groupedBrands as $daerah => $brandList)
        <div class="max-w-6xl mx-auto mt-12">
            <!-- Judul Wilayah -->
            <h2 class="text-center text-2xl font-bold text-yellow-500 mb-6 uppercase">{{ $daerah }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($brandList as $brand)
                    <div class="bg-gray-800 p-6 rounded-lg flex items-center space-x-4">
                        <!-- Logo Brand -->
                        <img 
                            src="{{ asset('images/brands/' . strtolower(str_replace(' ', '', $brand->nama)) . '.png') }}" 
                            alt="{{ $brand->nama }}" 
                            class="w-10 h-10 rounded shadow-md object-contain"
                            onerror="this.onerror=null;this.src='{{ asset('images/brands/default.png') }}';"
                        >

                        <!-- Info Penjualan -->
                        <div>
                            <h3 class="text-xl font-bold text-yellow-400 mb-1">{{ $brand->nama }}</h3>
                            <p class="text-gray-300">Total Terjual: {{ number_format($brand->total_terjual) }} unit</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

</div> {{-- <== Tutup elemen pembungkus --}}
