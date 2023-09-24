@include('includes/partials._advertisement_banner')

<header>
    <nav class="container">
        <ul class="flex">
            <li><router-link to="/" exact>Bienvenue</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
            <li><router-link to="/prix-par-services">Tarifs</router-link></li>
            <li>
                <img src="/img/logo.jpg" class="logo" alt="Logo de Poupette Nails Salon">
            </li>
            <li><router-link to="/shop">Boutique</router-link></li>
            <li><router-link to="/promotions">Promotions</router-link></li>
            @if(Auth::check() && Auth::user()->isAdmin() )
                <li><a href="/admin">Admin</a></li>
            @endif
            {{--@if( Auth::guest() )
                <li @click.prevent="showLoginModal = false"><a href="/register" @click.prevent="showRegisterModal = true">Register</a></li>
                <register-modal v-if="showRegisterModal" @close="showRegisterModal = false">
                    @include('includes.registerForm')
                </register-modal>
                <li @click.prevent="showRegisterModal = false"><a href="" @click.prevent="showLoginModal = true">Login</a></li>
                <login-modal v-if="showLoginModal" @close="showLoginModal = false">
                    @include('includes.loginForm')
                </login-modal>
            @endif--}}
        </ul>
    </nav>
</header>
