<?php

namespace App\Http\Controllers\Panel;

use App\Models\Brand;
use App\Models\Plane;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlaneStoreUpdateFormRequest;

class PlaneController extends Controller
{
    private $plane;
    private $totalPage = 2;

    public function __construct(Plane $plane)
    {
        $this->plane = $plane;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Listagem dos aviões";

        $planes = $this->plane->with('brand')->paginate($this->totalPage);

        return view('panel.planes.index', compact('title', 'planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastra Novo Avião";

        $brands = Brand::get();

        $classes = $this->plane->classes(); 
        
        $plane = null;

        return view('panel.planes.create', compact('title', 'classes', 'brands', 'plane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaneStoreUpdateFormRequest $request)
    {
        
        $title = "Cadastrar Novo Avião";

        $dataForm = $request->all();

        $insert = $this->plane->create($dataForm);

        if($insert){
            return redirect()
                    ->route('planes.index')
                    ->with('success', 'Cadastro realizado com sucesso!');
        }else{
            return redirect()->back()
                             ->with("error", 'Falha ao cadastrar!');
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
        $plane = $this->plane->with('brand')->find($id);
        if(!$plane)
        {
            return redirect()->back();
        }

        $title = "Detalhes do avião: {$plane->id}";

        $brand = $plane->brand->name;

        return view('panel.planes.show', compact('plane', 'title', 'brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plane = $this->plane->find($id);

        $brands = Brand::get();

        $classes = $this->plane->classes();     

        if(!$plane)
        {
            return redirect()->back();
        }

        $title = "Editar avião: {$plane->id}";

        return view('panel.planes.edit', compact('plane', 'title', 'brands', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaneStoreUpdateFormRequest $request, $id)
    {
        $plane = $this->plane->find($id);

        if(!$plane)
        {
            return redirect()->back();            
        }

        if(!$plane->update($request->all()))
        {
            return redirect()
                    ->route('planes.index')
                    ->with('error', "Falha ao editar");                    
        }else{
            return redirect()
                    ->back()
                    ->with('success', 'Sucesso ao editar')
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
        $plane = $this->plane->find($id);          

        if($plane->delete()){
            return redirect()
                    ->route('planes.index')
                    ->with('success', 'Avião apagado com sucesso!');
        }else{
            return redirect()->back()
                             ->with("error", 'Falha ao cadastrar!');
        }
    }


    public function search(Request $request)
    {

        $dataForm = $request->except(['_token']);

        $keySearch = $request->key_search;

        $title = "Resultados de aviões para: {$keySearch}";

        $planes = $this->plane->search($keySearch, $this->totalPage);

        $campoBusca = $request->key_search;

        $brands = Brand::get();

        $classes = $this->plane->classes();  

        $plane = null;

       

        return view('panel.planes.index', compact('title', 'planes', 'dataForm', 'campoBusca', 'classes', 'brands', 'plane'));

    }
}
