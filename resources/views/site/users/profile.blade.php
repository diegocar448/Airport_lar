@extends('site.layouts.app')

@section('content-site')

<div class="content">

    <section class="container">
        <h1 class="title">Meu Perfil</h1>

        @include('panel.includes.alerts')
        @include('panel.includes.errors')


        <div class="">
            <form class="form-eti" action="{{route('update.profile')}}" method="POST" enctype="multipart/form-data">
                {!! method_field('PUT') !!}           
                {!! csrf_field() !!}
        
                <div class="form-group">
                    <label for="name">Nome *</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ auth()->user()->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-Mail *</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" disabled="disabled" value="{{ auth()->user()->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Imagem: (Opcional) Informe Apenas se Quiser Atualizar</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                    <input type="file" name="image" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Senha: (Opcional) Informe Apenas se Quiser Atualizar</label>

                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                    <input type="password" name="password" class="form-control" placeholder="(Opcional) Informe Apenas se Quiser Atualizar a Senha">
                    </div>
                </div>

                <button type="submit" class="btn-form">Atualizar Perfil <i class="fa fa-retweet" aria-hidden="true"></i></button>

            </form>

        </div><!--Row-->
    </section><!--Container-->

</div>

@endsection