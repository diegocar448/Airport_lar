@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a>
    <a href="{{ route('states.index') }}" class="bred">Estado  ></a>
    <a href="{{ route('states.cities', $state->initials) }}" class="bred">{{ $state->name }}</a>
    <a href="" class="bred">Cidades</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cidades do Estado: ({{$cities->count()}} - {{$cities->total()}}) <strong>{{ $state->name }}</strong></h1>
</div>


<div class="content-din bg-white">

    <div class="form-search">        

        {{-- <form class="" action="{{route('state.cities.search', $state->initials)}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-2">                                            
                    <input class="form-control" type="text" value="{{$campoBusca ?? ""}}" name="key_search" placeholder="O que deseja encontrar?">
                </div>    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-search">Pesquisar</button>
                </div>
                
            </div>
        </form>   --}}      

        @if(isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{route('cities.index')}}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{$dataForm['key_search']}}</strong>
                </p>
            </div>
        @endif
    </div> 


    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>                 
            <th width="200">Ações</th>
        </tr>

        @forelse($cities as $city)
            <tr>
                <td>{{$city->name}}</td>                
                <td>
                    #ações                    
                   
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="200">Nenhum item cadastrado!</td>
            </tr>
        @endforelse
    </table>

    @if(isset($dataForm))
        {!! $cities->appends($dataForm)->links() !!}
    @else
        {!! $cities->links() !!}
    @endif

  

</div><!--Content Dinâmico-->

@endsection