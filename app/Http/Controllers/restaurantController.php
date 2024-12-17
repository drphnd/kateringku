<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\Order;
use App\Models\orderDetail;
use App\Models\Restaurant;
use App\Models\resto;
use Illuminate\Http\Request;

class restaurantController extends Controller
{

    public function showRestaurants()
    {
        // Ambil semua restoran dengan menu terkait
        $menu = menu::with('restos')->get(); // Ambil semua menu
        $resto = resto::with('menus')->get();

        return view('restaurants', [
            'menus' => $menu,
            'restos' => $resto
        ]);
    }

    public function find($id)
    {
        // Cari restoran berdasarkan ID dengan menu terkait
        $resto = resto::with('menus')->find($id);

        // Pastikan restoran ditemukan
        if (!$resto) {
            return redirect()->back()->with('error', 'Restoran tidak ditemukan.');
        }

        // Kirim data ke view
        return view('restaurants', [
            'menus' => $resto->menus, // Daftar menu terkait dengan resto_id
            'restos' => $resto        // Data restoran
        ]);
    }


    public function showAllRestaurants()
    {
        $restos = resto::all();

        return view('restaurants', [
            'pagetitle' => "Daftar Restoran",
            'restos' => $restos
        ]);
    }
}
