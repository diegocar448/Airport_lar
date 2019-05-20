@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('users.index')}}" class="bred">Usuários > </a>
    <a href="" class="bred">Editar Usuário</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">{{ $title }}</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')

   
    <form class="form form-search form-ds" action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
    {!! method_field('PUT') !!}           
    {!! csrf_field() !!}
    @include('panel.users.form')

    <div class="form-group">        
        <button class="btn btn-search">Enviar</button>
    </div>

    <form>




</div><!--Content Dinâmico-->

<script>

    let checkVerify =  document.querySelector("[name='is_admin']")

    checkVerify.addEventListener("click", checkVerifyClick, 'false')

    function checkVerifyClick(e)
    {
        

        if(e.target.checked)
        {
            e.target.value = 1;
        }else{
            e.target.value = 0;
        }
    }

</script>




@endsection