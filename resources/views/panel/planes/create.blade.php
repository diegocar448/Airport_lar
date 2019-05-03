@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('planes.index')}}" class="bred">Aviões > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Avião</h1>
</div>

<div class="content-din">
    @include('panel.includes.errors')
 
    <form class="form form-search form-ds" action="{{route('planes.store')}}" method="POST">
        @include('panel.planes.form')    
    <form>
</div>
<!--Content Dinâmico-->

@endsection