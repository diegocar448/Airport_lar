@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('users.index')}}" class="bred">Usuario > </a>
    <a href="" class="bred">{{$user->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Detalhes do usuário: {{$user->name}}</h1>
</div>

<div class="content-din">

    <ul>
        <li>
            @if($user->image)
                <img src="{{ url("storage/users/{$user->image}") }}" alt="{{$user->id}}">
            @else
                <img src="{{ url("assets/panel/imgs/no-image.png") }}" alt="{{$user->id}}">
            @endif
        </li>
        <li>
            Nome: <strong>{{$user->name}}</strong>
        </li>
        <li>
            Email: <strong>{{$user->email}}</strong>
        </li>      
        <li>
            Promoção: 
            <strong>
                @if($user->is_admin == 1)
                Administrador
                @else
                Usuário
                @endif
            </strong>
        </li>    
        

        
    </ul>

    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    
    <form class="form form-search form-ds" action="{{route('users.destroy', $user->id)}}" method="POST">
        {!! method_field('DELETE') !!}         
        {!! csrf_field() !!}    

        <div class="form-group">
            <button class="btn btn-danger">Deletar o usuário:  {{$user->name}}</button>
        </div>

    <form>




</div><!--Content Dinâmico-->

@endsection