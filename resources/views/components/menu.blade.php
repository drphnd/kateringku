<section class="bg-white py-8">
    <div class="container mx-auto">

        <!-- Form to Filter by Date -->
        <div class="mb-6 text-center">
            <form method="GET" action="{{ route('menu.index') }}">
                <label for="selected_date" class="mr-2 font-medium">Pilih Tanggal:</label>
                <input 
                    type="date" 
                    id="selected_date" 
                    name="selected_date" 
                    class="border border-gray-400 rounded p-2"
                    value="{{ request('selected_date', now()->format('Y-m-d')) }}" 
                    min="{{ now()->format('Y-m-d') }}">
                <button 
                    type="submit" 
                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Filter
                </button>
            </form>
        </div>

        <!-- Daftar Menu -->
        <div class="flex flex-wrap pt-4 pb-12 -mx-2">
            @if ($menus->isEmpty())
                <p class="text-center text-gray-500 w-full">Tidak ada menu tersedia untuk tanggal yang dipilih.</p>
            @else
                @foreach ($menus as $menu)
                    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <!-- Image -->
                            <img 
                                class="hover:grow hover:shadow-lg"
                                src="{{ asset($menu->image) }}" 
                                alt="{{ $menu->menu_name }}">
                            
                            <!-- Restaurant Name -->
                            <div class="text-black pt-3 flex items-center justify-between">
                                <p class="font-semibold text-m">
                                    {{ $menu->restos->resto_name ?? 'Unknown Name' }}
                                </p>
                            </div>

                            <!-- Menu Name -->
                            <div class="text-black pt-3 flex items-center justify-between">
                                <p class="font-semibold text-l">
                                    {{ $menu->menu_name }}
                                </p>
                            </div>

                            <!-- Description -->
                            <p class="pt-1 text-gray-500" style="font-size: 12px;">
                                {{ $menu->description }}
                            </p>

                            <!-- Price -->
                            <div class="text-black pt-3 flex items-center justify-between">
                                <p class="text-l">
                                   Rp {{ number_format($menu->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
