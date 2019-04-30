@extends('site.layouts.app')

@section('content-site')

<!--content -->
<div class="content">
    <!--container -->
    <div class="container">
            <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="control-label">{{ __('Email') }}</label>

                        <div>
                            <input id="email" type="email" placeholder="Digite o email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">{{ __('Senha') }}</label>

                        <div>
                            <input id="password" type="password" placeholder="Digite a Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Entrar') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
    </div>
    <!--container -->
</div>
<!--content -->
@endsection
