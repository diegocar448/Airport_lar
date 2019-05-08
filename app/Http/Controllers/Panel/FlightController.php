<?php

namespace App\Http\Controllers\Panel;

use App\Models\Plane;
use App\Models\Flight;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFlightFormRequest;

class FlightController extends Controller
{
    private $flight;
    private $plane;
    private $airport;
    private $totalPage = 20;

    public function __construct(Flight $flight, Plane $plane, Airport $airport)
    {
        $this->flight = $flight;        
        $this->plane = $plane;        
        $this->airport = $airport;        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataForm = null;

        $title = "Voos disponiveis";

        $flights = $this->flight->getItems();

        $airports = $this->airport->all();

        $origin = [];

        $destination = [];

        return view('panel.flights.index', compact('title', 'flights', 'dataForm','airports', 'origin', 'destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar Voos";

        $flight = null;
        $planes = $this->plane::all();
        $airports = $this->airport::all();

        


        return view('panel.flights.create', compact('title', 'planes', 'airports', 'flight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFlightFormRequest $request)
    {
        $nameFile = '';

        //verifica se o arquivo existe e se é valido 
        if($request->hasFile('image') && $request->file('image')->isValid())
        {

            $nameFile = uniqid(date('HisYmd')).'.'.$request->image->extension();           
            
            //verifica se deu certo o upload
            if(!$request->image->storeAs('flights', $nameFile)){
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer o upload')
                        ->withInput();                
            }

            
        }else{
            
        }

        if($this->flight->newFlight($request, $nameFile))
        {
            return redirect()
                        ->route('flights.index')
                        ->with('success', 'Sucesso ao cadastrar');
        }else{
            return redirect()
                        ->with('error', 'Falha ao cadastrar')
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
        $flight = $this->flight->with(['origin', 'destination'])->find($id);

        if(!$flight)
        {
            return redirect()->back();
        }

        $title = "Detalhe do voo {$flight->id}";

        return view('panel.flights.show', compact('flight', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $flight = $this->flight->find($id);

        $planes = $this->plane::all();
        $airports = $this->airport::all();

        if(!$flight)
        {
            return redirect()->back();
        }
        $title = "Editar Voo {$flight->id}";

        return view('panel.flights.edit', compact ('title', 'flight','planes', 'airports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFlightFormRequest $request, $id)
    {
        $flight = $this->flight->find($id);

        if(!$flight)
        {
            return redirect()->back();
        }

         

        //verifica se o arquivo existe e se é valido 
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            
            //verifica se exite, caso exista manter o nome mas troca o arquivo
            if($flight->image)
            {
                
                $nameFile = $flight->image;        
                  
            }else{
                $nameFile = uniqid(date('HisYmd')).'.'.$request->image->extension();    
                    
            }

                       
            
            //verifica se deu certo o upload
            if(!$request->image->storeAs('flights', $nameFile)){
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer o upload')
                        ->withInput();                
            }

            
        }else{
            
        }

        
        
        if($flight->updateFlight($request, $nameFile))
        {
            
            return redirect()
                        ->route('flights.index')
                        ->with('success', 'Sucesso ao cadastrar');
        }else{
            return redirect()
                        ->with('error', 'Falha ao cadastrar')
                        ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->flight->find($id)->delete();

        return redirect()
                        ->route('flights.index')
                        ->with('success', 'Sucesso ao cadastrar');
    }


    public function search(Request $request)
    {
        $code = $request->code;
        $date = $request->date;
        $hour_output = $request->hour_output;
        $total_plots = $request->total_plots;
        /* $origin = $request->origin;
        $destination = $request->destination; */

        $origin = $this->airport->where("id", $request->origin)->get();
        $destination = $this->airport->where("id", $request->destination)->get();
        

        $dataForm = $request->except("_token");
        
        $flights = $this->flight->search($request, $this->totalPage);

        $airports = $this->airport->all();
        
        $title = 'Resultados dos voos pesquisando';

        return view('panel.flights.index', compact('title', 'flights', 'code', 'date', 'hour_output', 'total_plots', 'origin', 'destination', 'dataForm', 'airports'));
    }
}
