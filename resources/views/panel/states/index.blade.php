@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="" class="bred">Estados</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Estados</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="{{route('states.search')}}" method="POST">
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
                    <a href="{{route('states.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif
    </div> 


    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Sigla</th>         
            <th width="200">Ações</th>
        </tr>

        @forelse($states as $state)
            <tr>
                <td>{{$state->name}}</td>
                <td>{{$state->initials}}</td>  
                <td>
                    {{-- <a href="{{route('planes.edit', $plane->id)}}" class="edit">Edit</a>
                    <a href="{{route('planes.show', $plane->id)}}" class="delete">View</a>
                    <a href="" class="edit">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                    </a> --}}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

  

</div><!--Content Dinâmico-->

@endsection