@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('planes.index')}}" class="bred">Voos > </a>
    <a href="" class="bred">{{$flight->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Detalhes do voo: {{$flight->id}}</h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Código: <strong>{{$flight->id}}</strong>
        </li>
        <li>
            Origem: <strong>{{$flight->origin->name}}</strong>
        </li>
        <li>
            Destino: <strong>{{$flight->destination->name}}</strong>
        </li>
        <li>
            Data: <strong>{{$flight->date}}</strong>
        </li>
        <li>
            Duração: <strong>{{$flight->time_duration}}</strong>
        </li>
        <li>
            Saída: <strong>{{$flight->hour_output}}</strong>
        </li>
        <li>
            Chegada: <strong>{{$flight->arrival_time}}</strong>
        </li>
        <li>
            Preço Anterior: <strong>{{$flight->old_price}}</strong>
        </li>
        <li>
            Preço Atual: <strong>{{$flight->price}}</strong>
        </li>
        <li>
            Total de paradas: <strong>{{$flight->total_plots}}</strong>
        </li>
        <li>
            Promoção: 
            <strong>
                @if($flight->is_promotion == 1)
                SIM
                @else
                NÃO
                @endif
            </strong>
        </li>
        <li>
            Descrição: <strong>{{$flight->description}}</strong>
        </li>
        

        
    </ul>

    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    
    <form class="form form-search form-ds" action="{{route('flights.destroy', $flight->id)}}" method="POST">
        {!! method_field('DELETE') !!}         
        {!! csrf_field() !!}    

        <div class="form-group">
            <button class="btn btn-danger">Deletar o voo</button>
        </div>

    <form>

{{-- @include('panel.includes.errors')

@if( isset($brand) )
    <!--<form class="form form-search form-ds" action="{{route('brands.update', $brand->id)}}" method="POST">-->
    {!! Form::model($brand, ['route' => ['brands.update', $brand->id], 'class' => 'form form-search form-ds', 'method' => 'PUT']) !!}
@else
    <!--<form class="form form-search form-ds" action="{{route('brands.store')}}" method="POST">-->
    {!! Form::open(['route' => 'brands.store', 'class' => 'form form-search form-ds']) !!}
@endif
    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-search">Enviar</button>
    </div>
{!! Form::close() !!} --}}



</div><!--Content Dinâmico-->

@endsection