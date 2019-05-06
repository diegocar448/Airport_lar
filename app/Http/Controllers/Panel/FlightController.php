<?php

namespace App\Http\Controllers\Panel;

use App\Models\Plane;
use App\Models\Flight;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $dataForm =$request->except('_token');

        $title = "Voos disponiveis";

        $flights = $this->flight->getItems();

        return view('panel.flights.index', compact('title', 'flights', 'dataForm'));
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
    public function store(Request $request)
    {
        //verifica se o arquivo existe e se é valido 
        if($request->hasFile('image') && $request->file('image')->isValid())
        {

            $extension = $request->image->extension();
            $nameFile = uniqid(date('HisYmd'));

            $newNameFile = "{$nameFile}.{$extension}";

            $request->image->storeAs('flights', $newNameFile);
        }

        if($this->flight->newFlight($request))
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
    public function update(Request $request, $id)
    {
        $flight = $this->flight->find($id);

        if(!$flight)
        {
            return redirect()->back();
        }

        

        if($flight->update($request->all()))
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
}
