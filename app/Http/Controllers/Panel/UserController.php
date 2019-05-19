<?php

namespace App\Http\Controllers\Panel;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileFormRequest;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{
    private $user;
    private $totalPage = 20;


    public function __construct(User $user)
    {
        $this->user = $user;        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Usuarios';

        $users = $this->user->paginate($this->totalPage);

        return view('panel.users.index', compact('title','users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;

        $title = 'Cadastrar Novo Usuário';

        return view('panel.users.create', compact('title', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateUserFormRequest $request)
    { 

        //Pega todos osdados que vem do formulario
        $dataForm = $request->all();

        //Verifica se atualizou a senha, caso contrario não atualiza como null
        if( isset($dataForm['password']) && $dataForm['password'] != '' ){
            $dataForm['password'] = bcrypt($dataForm['password']);
        }else{
            
        }
        if($this->user->create($dataForm)){
            return redirect()
                            ->route('users.index')
                            ->with('success', 'Cadastro realizado com sucesso!');
        }else{
            return redirect()
                            ->route('users.index')
                            ->with('error', 'Falha ao cadastrar!');
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
        $user = $this->user->find($id);

        if(!$user){
            return redirect()->back();
        }

        $title = "Detalhes do Usuário: {$user->name}";

        return view('panel.users.show', compact('title', 'user'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);
        

        if(!$user){
            return redirect()->back();
        }else{

        }

        $title = "Edita Usuário {$user->name}";

        return view('panel.users.edit', compact('title', 'user'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $user = $this->user->find($id);
        
        if(!$user){
            return redirect()->back();
        }

        //Pega todos osdados que vem do formulario
        $data = $request->all();

        //Verifica se atualizou a senha, caso contrario não atualiza como null
        if( isset($data['password']) && $data['password'] != '' ){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        //verifica se o arquivo existe e se é valido 
        if($request->hasFile('image') && $request->file('image')->isValid())
        {            
            //verifica se existe, caso exista manter o nome mas troca o arquivo
            if($user->image)
            {                
                $nameFile = $user->image;      
                
            }else{
                $nameFile = uniqid(date('HisYmd')).'.'.$request->image->extension();    
                    
            }

                       
            
            //verifica se deu certo o upload
            if(!$request->image->storeAs('users', $nameFile)){
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer o upload')
                        ->withInput();                
            }

            
        }else{
            $nameFile = null;
            
        }



        
        if($user->updateUser($request, $nameFile))
        {
            
            return redirect()
                        ->route('users.index')
                        ->with('success', 'Atualizado com sucesso');
        }else{
            return redirect()
                        ->with('error', 'Falha ao atualizar')
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

        $user = $this->user->find($id);    
        
        if(!$user){
            return redirect()->back();
        }

        if($user->delete()){
            return redirect()
                    ->route('users.index')
                    ->with('success', 'Usuário apagada com sucesso!');
        }else{
            return redirect()->back()
                             ->with("error", 'Falha ao deletar!');
        }        
    }


    public function search(Request $request)
    {
        $dataForm = $request->except('_token');        

        $users = $this->user->search($request->key_search, $this->totalPage);

        $title = "Usuários, filtros para: {$request->key_search}";         

        $campoBusca = $request->key_search;

        return view('panel.users.index', compact('title', 'users', 'campoBusca', 'dataForm'));        
    }

    public function myProfile()
    {
        $title = "Meu Perfil";

        return view('site.users.profile', compact('title'));
    }

    public function updateProfile(UpdateProfileFormRequest $request)
    {
        $user = auth()->user();
        
        if(!$user){
            return redirect()->back();
        }

        //Pega todos osdados que vem do formulario
        $data = $request->all();

        //Verifica se atualizou a senha, caso contrario não atualiza como null
        if( isset($data['password']) && $data['password'] != '' ){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        //verifica se o arquivo existe e se é valido 
        if($request->hasFile('image') && $request->file('image')->isValid())
        {            
            //verifica se existe, caso exista manter o nome mas troca o arquivo
            if($user->image)
            {                
                $nameFile = $user->image;      
                
            }else{
                $nameFile = uniqid(date('HisYmd')).'.'.$request->image->extension();    
                    
            }

                       
            
            //verifica se deu certo o upload
            if(!$request->image->storeAs('users', $nameFile)){
                return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer o upload')
                        ->withInput();                
            }

            
        }else{
            $nameFile = null;
            
        }


        if($user->updateUser($request, $nameFile))
        {
            
            return redirect()
                        ->route('my.profile')
                        ->with('success', 'Atualizado com sucesso');
        }else{
            return redirect()
                        ->with('error', 'Falha ao atualizar')
                        ->withInput();
        }       

        
    }

    public function logout()
    {
        

        Auth::logout();

        

        return redirect()->route('home');
    }
}
