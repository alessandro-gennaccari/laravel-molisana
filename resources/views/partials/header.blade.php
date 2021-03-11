<header>
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div class="header-menu">
        <ul>
            <li>
                <a href="{{ route('homepage') }}" class="{{ (Request::route()->getName() == 'homepage') ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{ route('pagina-prodotti') }}" class="{{ (Request::route()->getName() == 'pagina-prodotti') ? 'active' : ''}}">Prodotti</a>
            </li>
            <li>
                <a href="{{ route('sezione-notizie') }}" class="{{ (Request::route()->getName() == 'sezione-notizie') ? 'active' : ''}}">News</a>
            </li>
        </ul>
    </div>
</header>