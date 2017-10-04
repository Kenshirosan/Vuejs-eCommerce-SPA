@include('includes/partials._advertisement_banner')

<header>
    <nav class="container">
        <ul class="flex">
            <li><router-link to="/" exact>Bienvenue</router-link></li>
            <li><router-link to="about">About</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
            <li>
                <img src="/img/logo.jpg" class="logo" alt="Logo de Poupette Nails Salon">
            </li>
            <li><router-link to="/shop">Boutique</router-link></li>
            <li><router-link to="/prix-par-services">Tarifs</router-link></li>
            <li><router-link to="/promotions">Promotions</router-link></li>
            @if(Auth::check() && Auth::user()->isAdmin() )
                <li><a href="/admin">Admin</a></li>
            @endif
            @if( Auth::guest() )
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
            @endif
        </ul>
    </nav>
</header>