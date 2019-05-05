<?php

namespace App\Http\Controllers\Panel;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{    
    private $totalPage = 20;

    public function index(Request $request, $initials)
    {
        $state = State::where('initials', $initials)->get()->first();
        //dd($state = State::cities());

        $dataForm = $request->all();

        if(!$state)
        {
            return redirect()->back();
        }
      
        $cities = $state->cities()->paginate($this->totalPage);

        $title = "Cidades do estado {$state->name}";

        return view('panel.cities.index', compact('state', 'title', 'cities', 'dataForm'));
    }

    public function search(Request $request, $initials)
    {

        $state = State::where('initials', $initials)->get()->first();

        if(!$state)
        {
            return redirect()->back();
        }

        $dataForm = $request->except('_token');        
        $keySearch = $request->key_search;

        $cities = $state->searchCities($keySearch, $this->totalPage);

        $title = "Cidades do Estado: {$request->key_search}";         

        $campoBusca = $request->key_search;

       

        return view('panel.cities.index', compact('title', 'state', 'cities', 'dataForm', 'keySearch',  'campoBusca'));
    }
}
