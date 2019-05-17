@extends('site.layouts.app')

@section('content-site')

<div class="content">

    <section class="container">
        <h1 class="title">Detalhes do voô {{$flight->id}}</h1>


        <ul>
                <li>
                    Código: <strong>{{$flight->id}}</strong>
                </li>
                <li>
                    Origem: <strong>{{$flight->origin->name}}</strong>
                </li>
                <li>
                    Destino: <strong>{{$flight->destination->name}}</strong>
                </li>
                <li>
                    Data: <strong>{{formatDateAndTime($flight->date)}}</strong>
                </li>
                <li>
                    Duração: <strong>{{formatDateAndTime($flight->time_duration, 'H:i')}}</strong>
                </li>
                <li>
                    Saída: <strong>{{formatDateAndTime($flight->hour_output, 'H:i')}}</strong>
                </li>
                <li>
                    Chegada: <strong>{{formatDateAndTime($flight->arrival_time, 'H:i')}}</strong>
                </li>
                <li>
                    Preço Anterior: <strong>R$ {{number_format($flight->old_price, 2,',','.')}}</strong>
                </li>
                <li>
                    Preço Atual: <strong>R$ {{number_format($flight->price,2,',','.')}}</strong>
                </li>      
                <li>
                    Total de paradas: <strong>{{$flight->total_plots}}</strong>
                </li>
                <li>
                    Promoção: 
                    <strong>
                        @if($flight->is_promotion == 1)
                        SIM
                        @else
                        NÃO
                        @endif
                    </strong>
                </li>
                <li>
                    Descrição: <strong>{{$flight->description}}</strong>
                </li>                
            </ul>

            @include('panel.includes.errors')

            <form action="{{ route('reserve.flight') }}" method="POST">
                {!! csrf_field() !!}   
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                <input type="hidden" name="date_reserved" value="{{ date('Y-m-d') }}">
                <input type="hidden" name="status" value="reserved">
                <button class="btn btn-success" type="submit">Reservar Agora</button>
            </form>
    </section><!--Container-->
</div>

@endsection