<?php

namespace App\Http\Controllers\Panel;

use App\User;
use App\Models\Flight;
use App\Models\Reserve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserveController extends Controller
{

    private $totalPage = 50;
    private $reserve;

    public function __construct(Reserve $reserve)
    {
        $this->reserve = $reserve;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Reservas de Passagens aéreas';

        //flight traz tanto os detalhes do voo como quanto da origem (metodo de relacionamento de flight)
        $reserves = $this->reserve->with(['user', 'flight.origin'])->paginate($this->totalPage);

        return view('panel.reserves.index', compact('title', 'reserves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Nova Reserva";

        $users = User::pluck('name','id');        
        $flights = Flight::pluck('id','id');
        $status = $this->reserve->status();

        $reserve = null;       
        return view('panel.reserves.create', compact('title','users', 'flights', 'status', 'reserve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = "Cadastrar Nova Reserva";

        $dataForm = $request->all();

        $insert = $this->reserve->create($dataForm);

        if($insert){
            return redirect()
                    ->route('reserves.index')
                    ->with('success', 'Reservado com sucesso!');
        }else{
            return redirect()->back()
                            ->withInput()
                            ->with("error", 'Falha ao cadastrar!');
        }
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
    
}
