@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('flights.index')}}" class="bred">Voos > </a>
    <a href="" class="bred">Editar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Voo {{$flight->id}}</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')

   
    <form class="form form-search form-ds" action="{{route('flights.update', $flight->id)}}" method="POST" enctype="multipart/form-data">
    {!! method_field('PUT') !!}           
    {!! csrf_field() !!}
    @include('panel.flights.form')

    <div class="form-group">
        <button class="btn btn-search">Enviar</button>
    </div>

    <form>




</div><!--Content Dinâmico-->


<script>
    let checkbox_promo = document.querySelector("[name='is_promotion']")

    checkbox_promo.addEventListener('click', checkbox_promoClick, 'false')

    function checkbox_promoClick(e)
    {
        if(e.target.value == 1)
        {
            e.target.setAttribute('checked', 'false')
            e.target.value = 0
        }else if(e.target.value == 0){
            e.target.setAttribute('checked', 'true')
            e.target.value = 1
        }
    }
</script>

@endsection