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

        <form class="" action="{{route('flights.search')}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-4">                                            
                    <input class="form-control" type="number" value="{{$code ?? ""}}" name="code" placeholder="Código">
                </div>   
                <div class="col-md-2">                                            
                    <input class="form-control" type="date" value="{{$date ?? ""}}" name="date" placeholder="Data">
                </div>  
                <div class="col-md-2">                                            
                    <input class="form-control" type="time" value="{{$hour_output ?? ""}}" name="hour_output" placeholder="Hora de Saída">
                </div> 
                <div class="col-md-2">                                            
                    <input class="form-control" type="number" value="{{$total_plots ?? ""}}" name="total_plots" placeholder="Tota de Paradas">
                </div> 
                <div class="col-md-2">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form> 
        
        <br>
        @if($dataForm != null)
            <div class="alert alert-info">
                <p>
                    <a href="{{route('flights.search')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>

                    @if(isset($code))
                        <p>Código: <strong>{{$code}}</strong></p>
                    @endif    

                    @if(isset($date))
                        <p>Data: <strong>{{$date}}</strong></p>
                    @endif

                    @if(isset($hour_output))
                        <p>Hora de Saída: <strong>{{$hour_output}}</strong></p>
                    @endif

                    @if(isset($total_stops))
                        <p>Paradas: <strong>{{$total_plots}}</strong></p>
                    @endif

                    
                </p>
            </div>
        @endif
    </div> 

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
            <th>Imagem</th>                 
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
                <td>
                    @if($flight->image)
                        <img src="{{url("storage/flights/{$flight->image}")}}" alt="{{$flight->id}}" style="max-width:100px;">
                    @else
                        <img src="{{url("storage/image.png")}}" alt="{{$flight->id}}" style="max-width:100px;">
                    @endif
                </td>                
                <td>
                    <a href="">{{$flight->origin->name}}</a>                    
                </td>                
                <td>
                    <a href="">{{$flight->destination->name}}</a>
                </td>                
                <td>{{$flight->qty_stops}}</td>                
                <td>{{formatDateAndTime($flight->date)}}</td>                
                <td>{{formatDateAndTime($flight->hour_output, 'H:i')}}</td>                
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