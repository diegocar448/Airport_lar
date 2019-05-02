@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('brands.index')}}" class="bred">Marcas > </a>
    <a href="" class="bred">{{$brand->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">{{$brand->name}}</h1>
</div>

<div class="content-din">

    <ul>
        <li>
            Nome: <strong>{{$brand->name}}</strong>
        </li>
    </ul>

    <div class="messages">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div>

    <div class="messages">
        @if(session('success'))
            <div class="alert alert-error">
                {{session('error')}}
            </div>
        @endif
    </div>

    
    <form class="form form-search form-ds" action="{{route('brands.destroy', $brand->id)}}" method="POST">
        {!! method_field('DELETE') !!}         
        {!! csrf_field() !!}    

        <div class="form-group">
            <button class="btn btn-danger">Apagar Marca</button>
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