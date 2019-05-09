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

   

        $airports = $city->airports()->paginate($this->totalPage);

        return view('panel.airports.index', compact('city', 'title', 'airports', 'dataForm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idCity)
    {
        $city = $this->city->find($idCity);

       
        $cities = $this->city->where("state_id", $city->state_id)->orderBy('name', 'ASC')->get();

        if(!$city){
            return redirect()->back();
        }

        $title = "Cadastrando novo aeroporto na cidade {$city->name}";

        return view('panel.airports.create', compact('title', 'city', 'cities'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}