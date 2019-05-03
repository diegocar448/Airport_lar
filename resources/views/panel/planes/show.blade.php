@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('planes.index')}}" class="bred">Aviões > </a>
    <a href="" class="bred">{{$plane->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">{{$plane->name}}</h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Código: <strong>{{$plane->id}}</strong>
        </li>
        <li>
            Classe: <strong>{{$plane->classes($plane->class)}}</strong>
        </li>
        <li>
            Marca: <strong>{{$brand}}</strong>
        </li>
        <li>
            Quantidade de passageiros: <strong>{{$plane->qty_passengers}}</strong>
        </li>
    </ul>

    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    
    <form class="form form-search form-ds" action="{{route('planes.destroy', $plane->id)}}" method="POST">
        {!! method_field('DELETE') !!}         
        {!! csrf_field() !!}    

        <div class="form-group">
            <button class="btn btn-danger">Apagar Avião</button>
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