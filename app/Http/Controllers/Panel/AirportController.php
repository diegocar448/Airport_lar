<?php

namespace App\Http\Controllers\Panel;

use App\Models\City;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AirportController extends Controller
{

    private $city;
    private $airport;
    private $totalPage = 10;


    public function __construct(City $city, Airport $airport)
    {
        $this->city = $city;
        $this->airport = $airport;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $idCity)
    {
        $city = $this->city->find($idCity);
        if(!$city){
            return redirect()->back();
        }

        $dataForm = $request->all();

        $title = "Aeroportos da cidade {$city->name}";

        $campoBusca = null;

        $airports = $city->airports()->paginate($this->totalPage);

        return view('panel.airports.index', compact('city', 'title', 'airports', 'dataForm', 'campoBusca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idCity)
    {
        $airport = null;

        $city = $this->city->find($idCity);
       
        $cities = $this->city->where("state_id", $city->state_id)->orderBy('name', 'ASC')->get();

        if(!$city){
            return redirect()->back();
        }

        $title = "Cadastrando novo aeroporto na cidade {$city->name}";

        return view('panel.airports.create', compact('title', 'city', 'cities', 'airport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idCity)
    {
        $city = $this->city->find($idCity);

        if(!$city)
        {
            return redirect()->back();
        }

        if($city->airports()->create($request->all()))
        {
            return redirect()
                        ->route('airports.index', $idCity)
                        ->with('success', 'Aeroporto cadastrado com sucesso');
        }else{
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao cadastrar aeroporto')
                        ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCity, $id)
    {        

        $airport = $this->airport->with('city')->find($id);

        if(!$airport)
        {
            return redirect()->back();
        }

        $city = $airport->city;

        $title = "Aeroporto {$airport->name} - {$city->name}";

        return view('panel.airports.show', compact('city', 'title', 'airport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCity, $id)
    {        
        
        $airport = $this->airport->with("city")->find($id);

        if(!$airport)
        {
            return redirect()->back();
        }

        $city = $airport->city;

        $title = "Editar Aeroporto {$airport->name}";

        return view('panel.airports.edit', compact('airport', 'title', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCity, $id)
    {
        $airport = $this->airport->find($id);

        if(!$airport)
        {
            return redirect()->back();
        }

        if($airport->update($request->all()))
        {
            return redirect()
                            ->route('airports.index', $idCity)
                            ->with('success', 'Aeroporto atualizando com sucesso');
        }else{
            return redirect()
                            ->back()
                            ->with('error', 'Falha ao atualizar aeroporto')
                            ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCity, $id)
    {
        $airport = $this->airport->find($id);

        if(!$airport)
        {
            return redirect()->back();
        }

        if($airport->delete())
        {
            return redirect()
                            ->route('airports.index', $idCity)
                            ->with('success', 'Aeroporto Apagado com sucesso');
        }else{
            return redirect()
                            ->back()
                            ->with('error', 'Falha ao Apagar aeroporto')
                            ->withInput();
        }
    }

    public function search(Request $request, $idCity)
    {
        $city = $this->city->find($idCity);

        if(!$city)
        {
            return redirect()->back();
        }

       

        $airports = $this->airport->search($city, $request, $this->totalPage);    
        
        $title = "Aeroportos da cidade {$city->name}";

        $dataForm = $request->except("_token");

        $campoBusca = $request->key_search;
        

        return view('panel.airports.index', compact('city', 'title', 'airports', 'dataForm', 'campoBusca'));

    }



}
