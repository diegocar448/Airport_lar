@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="" class="bred">Flights</a>
    
</div>

<div class="title-pg">
    <h1 class="title-pg">Voos:</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        
{{-- 
        <form class="" action="{{route('flights.search', $flights->id)}}" method="POST">
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
                    <a href="{{route('flights.search', $flights->id)}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif
    </div>  --}}

    <div class="messages">
            @include('panel.includes.alerts')
         </div>
     
         <div class="class-btn-insert">
             <a href="{{route('flights.create')}}" class="btn-insert">
                 <span class="glyphicon glyphicon-plus"></span>
                 Cadastrar
             </a>
         </div>


    
    <table class="table table-striped">
        <tr>
            <th>#</th>                 
            <th>Origem</th>                 
            <th>Destino</th>                 
            <th>Paradas</th>                 
            <th>Data</th>                 
            <th>Saída</th>                 
            <th width="200">Ações</th>
        </tr>

        @forelse($flights as $flight)
            <tr>
                <td>{{$flight->id}}</td>                
                <td>{{$flight->ariport_origin_id}}</td>                
                <td>{{$flight->airport_destination_id}}</td>                
                <td>{{$flight->qty_stops}}</td>                
                <td>{{$flight->date}}</td>                
                <td>{{$flight->hour_output}}</td>                
                <td>
                    <a href="{{route('flights.edit', $flight->id)}}" class="edit">Editar</a>                   
                    <a href="{{route('flights.show', $flight->id)}}" class="delete">Apagar</a>                   
                   
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

    @if(isset($dataForm))
        {!! $flights->appends($dataForm)->links() !!}
    @else
        {!! $flights->links() !!}
    @endif

  

</div><!--Content Dinâmico-->

@endsection