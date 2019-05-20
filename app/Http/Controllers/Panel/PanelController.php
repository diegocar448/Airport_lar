<?php

namespace App\Http\Controllers\Panel;

use App\User;
use App\Models\City;
use App\Models\Brand;
use App\Models\Plane;
use App\Models\State;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Reserve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        $title = "Sistema de Agência de Turismo";

        $totalBrands        = Brand::count();
        $totalPlanes        = Plane::count();
        $totalStates        = State::count();
        $totalCities        = City::count();
        $totalAirports      = Airport::count();
        $totalFlights       = Flight::count();
        $totalUsers         = User::count();
        $totalReserves      = Reserve::count();

        return view('panel.home.index', compact("title", "totalBrands", 'totalPlanes', 'totalStates', 'totalCities', 'totalAirports',
                    'totalFlights', 'totalUsers', 'totalReserves'));
    }
}
