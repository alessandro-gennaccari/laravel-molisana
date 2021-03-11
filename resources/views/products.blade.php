@extends('layouts.app')
@section('title', 'Prodotti - La Molisana')
@section('content')
<main id="prodotti">
    <div class="container">
        <div class="container-card">
            @foreach ($formati as $formato)
            <div class="card">
                <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                <a href="#">
                    <div class="layover">
                        <div class="layover-text">
                            {{ $formato['titolo'] }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection