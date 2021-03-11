@extends('layouts.app')
@section('title', 'Le ultime notizie - La Molisana')
@section('content')
<main>
    @for ($i = 0; $i < 4; $i++)
    <div class="paragraph">
        <h2>Giusto per popolare la pagina</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur mollitia culpa repellendus velit? Ad excepturi distinctio adipisci iusto. Adipisci eius aspernatur necessitatibus labore beatae qui illo nihil distinctio fugiat soluta.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A veritatis doloremque vero. Exercitationem placeat magni laudantium itaque nisi ex, non at earum perspiciatis neque amet distinctio quas aliquam nulla mollitia.</p>
    </div>
    @endfor
</main>
@endsection