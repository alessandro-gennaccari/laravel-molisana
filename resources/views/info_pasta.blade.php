@extends('layouts.app')
@section('title', 'In Dettaglio' .' ' .$tipoProdotto['titolo'])

@section('content')
<main>
    <img src="{{ $tipoProdotto['src-h'] }}" alt="Anteprima Pasta">
    <img src="{{ $tipoProdotto['src-p'] }}" alt="Confezione Pasta">
</main>
@endsection