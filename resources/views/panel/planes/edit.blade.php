@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('planes.index')}}" class="bred">Aviões > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Avião: <strong>{{$plane->name}}</strong></h1>
</div>

<div class="content-din">
    @include('panel.includes.errors')
    @include('panel.includes.alerts')
 
    <form class="form form-search form-ds" action="{{route('planes.update', $plane->id)}}" method="POST">
        {!! method_field('PUT') !!}    
        @include('panel.planes.form')    
    <form>
</div>
<!--Content Dinâmico-->

@endsection