@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="" class="bred">Usuários</a>
    
</div>

<div class="title-pg">
    <h1 class="title-pg">Usuários:</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="{{route('users.search')}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{$campoBusca ?? ""}}" name="key_search" placeholder="O que deseja encontrar?">
                </div>    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>

        @if(isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{route('users.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif

        <div class="messages">
            @include('panel.includes.alerts')
        </div>
            
        <div class="class-btn-insert">
            <a href="{{route('users.create')}}" class="btn-insert">
                <span class="glyphicon glyphicon-plus"></span>
                Cadastrar Usuários
            </a>
        </div>   
        
    </div>
       
    <table class="table table-striped">
        <tr>
                       
            <th>Imagem</th>                 
            <th>Nome</th>                 
            <th>E-mail</th>                           
            <th width="200">Ações</th>
        </tr>

        @forelse($users as $user)
            <tr>                              
                <td>
                    @if($user->image)
                        <img src="{{url("storage/users/{$user->image}")}}" alt="{{$user->id}}" style="max-width:100px;">
                    @else
                        <img src="{{url("storage/image.png")}}" alt="{{$user->id}}" style="max-width:100px;">
                    @endif
                </td>                
                <td>
                    {{$user->name}}                   
                </td>                
                <td>
                    {{$user->email}}
                </td>                                                                               
                <td>
                    <a href="{{route('users.edit', $user->id)}}" class="edit">Editar</a>                   
                    <a href="{{route('users.show', $user->id)}}" class="delete">Apagar</a>                   
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

    @if(isset($dataForm))
        {!! $users->appends($dataForm)->links() !!}
    @else
        {!! $users->links() !!}
    @endif

  

</div><!--Content Dinâmico-->

@endsection