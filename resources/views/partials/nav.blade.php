<nav>
    <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"> Home </a>
    <a href="{{ route('products') }}" class="{{ Route::currentRouteName() === 'products' ? 'active' : '' }}"> Prodotti </a>
    <a href="{{ route('contacts') }}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"> Contatti </a>
</nav>