@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="{{ route('planes.index') }}" class="bred">Planes</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Aviões</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        {{-- <form class="" action="{{route('planes.search')}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{$campoBusca ?? ""}}" name="key_search" placeholder="O que deseja encontrar?">
                </div>    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form> --}}
        

        @if(isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{route('planes.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif
    </div>
 

    <div class="messages">
       @include('panel.includes.alerts')
    </div>

    <div class="class-btn-insert">
        <a href="{{route('planes.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar Avião
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>Classe</th>
            <th>Marca</th>
            <th>Total de Passageiros</th>
            <th width="200">Ações</th>
        </tr>

        @forelse($planes as $plane)
            <tr>
                <td>{{$plane->classes($plane->class)}}</td>
                <td>{{$plane->brand->name}}</td>
                <td>{{$plane->qty_passengers}}</td>
                <td>
                    <a href="{{route('planes.edit', $plane->id)}}" class="edit">Edit</a>
                    <a href="{{route('planes.show', $plane->id)}}" class="delete">View</a>
                    <a href="{{-- {{route('planes.planes', $plane->id)}} --}}" class="edit">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

    @if(isset($dataForm))
        {!! $planes->appends($dataForm)->links() !!}
    @else
        {!! $planes->links() !!}
    @endif

</div><!--Content Dinâmico-->

@endsection