@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('flights.index')}}" class="bred">Voos > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Voo</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')

    @if(isset($flight))
        <form class="form form-search form-ds" action="{{route('flights.update', $flight->id)}}" method="POST" enctype="multipart/form-data">
        {!! method_field('PUT') !!}    
    @else
        <form class="form form-search form-ds" action="{{route('flights.store')}}" method="POST" enctype="multipart/form-data">
    @endif    
        {!! csrf_field() !!}
        @include('panel.flights.form')

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

@endsection