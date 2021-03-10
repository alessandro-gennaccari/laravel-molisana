@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="container-card">
            @foreach ($formati as $formato)
            <div class="card">
                <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                <a href="#">
                    <div class="layover">
                        <div class="layover-text">
                            {{ $formato['titolo'] .' - ' .$formato['tipo'] }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection