@extends('layouts.app')
@section('title', 'Prodotti - La Molisana')
@section('content')
<main id="prodotti">
    <div class="container">

        @foreach ($formati as $type => $value)
        <h2>La {{ $type }}</h2>
        <div class="container-card">
            @foreach ($value as $key => $formato)
            <div class="card">
                <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                <a href="{{ route('informazioni-pasta', ['id' => $key]) }}">
                    <div class="layover">
                        <div class="layover-text">
                            {{ $formato['titolo'] }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach

    </div>
</main>
@endsection