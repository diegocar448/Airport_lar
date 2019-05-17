<?php

namespace App\Http\Controllers\Site;

use App\Models\City;
use App\Models\Flight;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReserveFormRequest;
use App\Models\Reserve;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Home Page';

        //$cities = City::pluck('name')->sortBy('name');
        $airports = Airport::with('city')->get();

        return view('site.home.index', compact('title', 'airports'));
    }

    public function promotions(Flight $flight)
    {
        $title = 'Promoções';

        $promotions = $flight->promotions();

        return view('site.promotions.list', compact('title', 'promotions'));
    }

    public function search(Request $request, Flight $flight)
    {      
        $title = 'Resultados da Pesquisa';

        $origin = getInfoAirport($request->origin);
        $destination = getInfoAirport($request->destination);
   
        $flights = $flight->searchFlights($origin['id_airport'], $destination['id_airport'], $request->date);

       return view('site.search.search', [
                'title'             =>  $title,
                'flights'           =>  $flights,
                'origin'            =>  $origin['name_city'],
                'destination'       =>  $destination['name_city'],
                'date'              =>  formatDateAndTime($request->date),
           ]);        
    }


    public function detailsFlight($idFlight)
    {
        $flight = Flight::with(['origin', 'destination'])->find($idFlight);

        if(!$flight)
        {
            return redirect()->back();
        }

        $title = "Detalhe do voo {$flight->id}";

        return view('site.flights.details', compact('flight', 'title'));
    }

    public function reserveFlight(StoreReserveFormRequest $request, Reserve $reserve)
    {
        if($reserve->newReserve($request->flight_id))
        {
            return redirect()
                        ->route('purchaces')
                        ->with('success', 'Reserva Realizada com sucesso!');
        }else{
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao reservar');
        }        
    }


    public function myPurchaces()
    {
        return 'myPurchaces';
    }
}
