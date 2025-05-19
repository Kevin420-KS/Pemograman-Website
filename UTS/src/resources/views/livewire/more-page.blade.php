<div> <!-- Satu Root Element -->
    <div class="quote text-center py-8">
        <h1 class="text-3xl font-bold mb-4">LOKASI DEALER DAN KONTAK DEALER DI SETIAP DAERAH</h1>
    </div>

    <div class="max-w-4xl mx-auto p-4" x-data="{ activeTab: 'lokasi' }">
        <!-- Tab Navigation -->
        <div class="flex justify-center mb-8">
            <button @click="activeTab = 'lokasi'" 
                    :class="{ 'bg-blue-500 text-white': activeTab === 'lokasi' }"
                    class="px-6 py-2 rounded-l-lg border border-gray-300 font-medium">
                Lokasi Dealer
            </button>
            <button @click="activeTab = 'kontak'" 
                    :class="{ 'bg-blue-500 text-white': activeTab === 'kontak' }"
                    class="px-6 py-2 rounded-r-lg border border-gray-300 font-medium">
                Kontak Sales
            </button>
        </div>

        <!-- Lokasi Dealer Content -->
        <div x-show="activeTab === 'lokasi'" class="space-y-6">
            @if($lokasiDealers->count() > 0)
                @foreach($lokasiDealers->groupBy('kota') as $kota => $dealers)
                    <div class="bg-gray-800 p-6 rounded-lg shadow">
                        <h2 class="text-xl font-bold mb-4 text-black">{{ strtoupper($kota) }}</h2>
                        <ul class="space-y-2">
                            @foreach($dealers as $dealer)
                                <li class="flex items-start">
                                    <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                                    <span class="text-white">{{ $dealer->alamat }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @else
                <div class="text-center py-8 text-gray-500">
                    Data lokasi dealer tidak tersedia
                </div>
            @endif
        </div>

        <!-- Kontak Sales Content -->
        <div x-show="activeTab === 'kontak'" class="grid md:grid-cols-3 gap-6">
            @if($kontakSales->count() > 0)
                @foreach($kontakSales as $sales)
                    <div class="bg-white p-6 rounded-lg shadow text-center">
                        <h3 class="text-lg font-bold uppercase text-black">{{ $sales->daerah }}</h3>
                        <div class="mt-4">
                            <p class="font-semibold text-gray-700">{{ $sales->nama }}</p>
                            <p class="text-blue-600 mt-2 font-medium">{{ $sales->nomor_telepon }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-3 text-center py-8 text-gray-500">
                    Data kontak sales tidak tersedia
                </div>
            @endif
        </div>
    </div>

    <footer class="text-center py-4 text-sm text-gray-500 mt-8">
        Website in:
