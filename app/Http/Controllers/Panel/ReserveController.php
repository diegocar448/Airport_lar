<?php

namespace App\Http\Controllers\Panel;

use App\User;
use App\Models\Flight;
use App\Models\Reserve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReserveFormRequest;

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
    public function store(StoreReserveFormRequest $request)
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
        $reserve = $this->reserve->with(['flight', 'user'])->find($id);  

        if(!$reserve)
        {
            return redirect()->back();
        }

        $users = User::pluck('name','id');        
        $flights = Flight::pluck('id','id');
        $status = $this->reserve->status();


        $user = $reserve->user;
        $flight = $reserve->flight;

        $title = "Editar reserva do usuário: {$user->name}"; 

        return view('panel.reserves.edit', compact('reserve', 'title', 'user', 'flight', 'users', 'flights', 'status'));
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
        $reserve = $this->reserve->find($id);        

        if(!$reserve)
        {
            return redirect()->back();
        }
        if($reserve->changeStatus($request->status))
        {
            return redirect()->route('reserves.index')->with('message', 'Status atualizado com sucesso!');
        }else{
            return redirect()->withInput()->with('error', 'Falha ao reservar!');
        }
    }

    public function search(Request $request)
    {
        $reserves = $this->reserve->search($request, $this->totalPage);

        $title = "Resultados para a pesquisa";

        $dataForm = $request->except('_token');

        return view("panel.reserves.search", compact('reserves', 'title', 'dataForm'));
    }
    
}
