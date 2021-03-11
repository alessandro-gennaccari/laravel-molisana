@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection
@section('title', 'In Dettaglio' .' ' .$tipoProdotto['titolo'])

@section('content')
<main id="info-products">
    <div class="info-title">
        <h1>{{ $tipoProdotto['titolo'] }}</h1>
    </div>
    <img src="{{ $tipoProdotto['src-h'] }}" alt="Anteprima Pasta">
    <img src="{{ $tipoProdotto['src-p'] }}" alt="Confezione Pasta">
    <div class="info-desc">
        <div class="container">
            <p>{!!  $tipoProdotto['descrizione'] !!}</p>
            <div class="box">
                <ul>
                    <li>
                        <i class="fas fa-info-circle"></i>
                        <div>{{ 'Tipo: ' .$tipoProdotto['tipo'] }}</div>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <div>{{ 'Cottura: ' .$tipoProdotto['cottura'] }}</div>
                    </li>
                    <li>
                        <i class="fas fa-weight-hanging"></i>
                        <div>{{ 'Peso: ' .$tipoProdotto['peso'] }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection