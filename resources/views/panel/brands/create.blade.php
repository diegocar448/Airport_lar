@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('brands.index')}}" class="bred">Marcas > </a>
    <a href="" class="bred">Gestão</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Gestão de Avião</h1>
</div>

<div class="content-din">

    <form class="form form-search form-ds" action="{{route('brands.store')}}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
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