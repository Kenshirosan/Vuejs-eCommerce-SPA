<template>
    <div>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="welcome">
                    <h1>Bienvenue <span>Chez Entreprise</span></h1>
                    <p><router-link to="/contact">Make an appointment</router-link></p>
                </div>
            </div>
        </div>
        <presentationcards></presentationcards>
        <pricingandoffercards></pricingandoffercards>
        <thegirl></thegirl>
        <brands></brands>
        <workers></workers>
        <blog></blog>
        <pricing></pricing>
        <whattheysay></whattheysay>
    </div>
</template>

<script>
    import presentationcards from './includes/PresentationCards.vue';
    import pricingandoffercards from './includes/PricingAndOfferCards.vue';
    import thegirl from './includes/TheGirl.vue';
    import brands from './includes/Brands.vue';
    import workers from './includes/Workers.vue';
    import blog from './includes/Blog.vue';
    import pricing from './includes/Pricing.vue';
    import whattheysay from './includes/WhatTheySay.vue';
    import moment from 'moment';

    export default {
        components: { presentationcards,
                      pricingandoffercards,
                      thegirl,
                      brands,
                      workers,
                      blog,
                      pricing,
                      whattheysay
                    }
    }
</script>
