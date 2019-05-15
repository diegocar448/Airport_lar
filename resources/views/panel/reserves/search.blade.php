@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="{{ route('reserves.index') }}" class="bred">Reservas</a>
    <a href="" class="bred">Resultados da Pesquisa</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Reservas</h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        <form class="" action="{{route('reserves.search')}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{ $dataForm['user'] ?? '' }}" name="user" placeholder="Detalhes do usuário?">
                </div>    
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{ $dataForm['reserve'] ?? '' }}" name="reserve" placeholder="Detalhes da Reserva?">
                </div>  
                <div class="col-md-2">                                            
                    <input class="form-control" type="date" value="{{ $dataForm['date'] ?? '' }}" name="date" placeholder="Detalhes do Voo?">
                </div>  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>                
            </div>
        </form>
        
        <div class="alert alert-info">
            <p>
            @if(isset($dataForm['user']))                
                <a href="{{route('reserves.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                Resultados para o Usuário: <strong>{{$dataForm['user']}}</strong><br>                
            @endif
            @if(isset($dataForm['reserve']))               
                <a href="{{route('reserves.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                Resultados para a Reserva: <strong>{{$dataForm['reserve']}}</strong><br>                    
            @endif
            @if(isset($dataForm['date']))               
                <a href="{{route('reserves.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                Resultados para a Data: <strong>{{$dataForm['date']}}</strong><br>                  
            @endif
            </p>
        </div>
    </div>
 

    <div class="messages">
       @include('panel.includes.alerts')
    </div>

    <div class="class-btn-insert">
        <a href="{{route('reserves.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Fazer Nova Reserva
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#id</th>
            <th>Usuario</th>
            <th>Voo</th>
            <th>Status</th>
            <th width="200">Ações</th>
        </tr>

        @forelse($reserves as $reserve)
            <tr>
                <td>{{$reserve->user_id}}</td>
                <td>{{$reserve->user_name}}</td>
                <td>{{$reserve->flight_id}}  ({{ formatDateAndTime($reserve->flight_date) }})</td>
                <td>{{$reserve->status($reserve->status)}}</td>
                <td>
                    <a href="{{route('reserves.edit', $reserve->id)}}" class="edit">Edit</a>                    
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

    {!! $reserves->appends($dataForm)->links() !!}

    {{-- @if(isset($dataForm))
        {!! $reserves->appends($dataForm)->links() !!}
    @else
        {!! $reserves->links() !!}
    @endif --}}

</div><!--Content Dinâmico-->

@endsection