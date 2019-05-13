@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('reserves.index')}}" class="bred">Reservas > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Nova Reserva</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')

    
    <form class="form form-search form-ds" action="{{route('reserves.store')}}" method="POST" enctype="multipart/form-data">       
        
        @include('panel.reserves.form')

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

@endsection