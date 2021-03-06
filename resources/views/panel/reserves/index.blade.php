@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="{{ route('reserves.index') }}" class="bred">Reservas</a>
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
                    <input class="form-control" type="text" value="{{$campoBusca ?? ""}}" name="user" placeholder="Detalhes do usuário?">
                </div>    
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{$campoBusca ?? ""}}" name="reserve" placeholder="Detalhes da Reserva?">
                </div>  
                <div class="col-md-2">                                            
                    <input class="form-control" type="date" value="{{$campoBusca ?? ""}}" name="date" placeholder="Detalhes do Voo?">
                </div>  
                <div class="col-md-2">                                            
                    <select name="status" class="form-control">
                        <option value="">Selecione o Status da Reserva</option>
                        <option value="reserved">Reservado</option>
                        <option value="canceled">Cancelado</option>
                        <option value="paid">Pago</option>
                        <option value="concluded">Concluido</option>
                    </select>                    
                </div> 
                <div class="col-md-4">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>
        

        @if(isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{route('reserves.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif
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
                <td>{{$reserve->id}}</td>
                <td>{{$reserve->user->name}}</td>
                <td>{{$reserve->flight->id}}  ({{ formatDateAndTime($reserve->flight->date) }})</td>
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

    @if(isset($dataForm))
        {!! $reserves->appends($dataForm)->links() !!}
    @else
        {!! $reserves->links() !!}
    @endif

</div><!--Content Dinâmico-->

@endsection