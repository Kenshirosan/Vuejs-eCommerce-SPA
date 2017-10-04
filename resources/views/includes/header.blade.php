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
        </ul>
    </nav>
</header>