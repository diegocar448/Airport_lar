<?php

namespace App\Http\Controllers\Panel;

use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }


    public function index()
    {
        $states = $this->state->get();

        $title = "Exibição dos estados brasileiros";        

        return view('panel.states.index', compact('states', 'title'));
    }

    public function search(Request $request)
    {
        $dataForm = $request->except(['_token']);

        $keySearch = $request->key_search;

        $title = "Resultados de estados: {$keySearch}";

        $states = $this->state->search($keySearch);

        $campoBusca = $request->key_search;


        return view('panel.states.index', compact('title', 'states', 'dataForm', 'keySearch', 'campoBusca'));

        

        
    }
}
