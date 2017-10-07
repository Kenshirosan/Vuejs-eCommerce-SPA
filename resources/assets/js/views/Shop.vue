<template>
    <section class="blog offer-and-pricing">
        <h1>Shop with us !</h1>
        <div class="container-large">
            <ul class="flex cards">
                <li v-for="product in products">
                    <div class="card-body" data-aos="slide-down">
                        <img :src="'/img/' + product.image " alt="">
                    </div>
                    <div class="card-footer">
                        <h2>{{ product.name }} <span>${{ product.price /100}}</span></h2>
                        <p>{{ product.description }}</p>
                        <router-link :to="'/product/'+ product.slug" exact><p class="call-to-action">toto</p></router-link>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                products: [],
            }
        },

        mounted(){
            axios.get('/products')
                .then(response => this.products = response.data);
        }
    }
</script>