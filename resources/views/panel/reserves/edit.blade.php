@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('reserves.index')}}" class="bred">Reservas > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">{{$title}}</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')

    
    <form class="form form-search form-ds" action="{{route('reserves.update', $reserve->id)}}" method="POST" enctype="multipart/form-data">       
        {!! method_field('PUT') !!} 
        {!! csrf_field() !!}   
        {{-- @include('panel.reserves.form') --}}

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="">
                @foreach($status as $key=>$sts)       
                    <option
                    @if($reserve != null)             
                        @if($reserve->status == $key)
                            selected="selected"            
                        @elseif($reserve->status == $key)
                            selected="selected"
                        @endif            
                    @endif            
                    value="{{$key}}"            
                    >{{ $sts }}</option>      
                @endforeach
            </select>    
        </div>

        <div class="form-group">
            <button class="btn btn-search">Editar Reserva</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

@endsection