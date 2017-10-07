<template>
    <section class="blog offer-and-pricing">
        <h1>Shop with us !</h1>
        <div class="container-large">
            <!-- <ul class="float-left">
                <li><img src="/img/logo.jpg" style="width:250px; height: 250px;" alt=""></li>
                <li><img src="/img/logo.jpg" style="width:250px; height: 250px;" alt=""></li>
                <li><img src="/img/logo.jpg" style="width:250px; height: 250px;" alt=""></li>
                <li><img src="/img/logo.jpg" style="width:250px; height: 250px;" alt=""></li>
            </ul>
            <div class="clearfix" style="clear:both"></div> -->
            <ul class="flex cards" data-aos="slide-left">
                <li>
                    <div class="card-body" data-aos="slide-up">
                        <img :src="'/img/' + product.image " alt="">
                    </div>
                    <div class="card-footer">
                        <h2>{{ product.name }} <span>${{ product.price /100}}</span></h2>
                        <p>{{ product.description }}</p>
                        <a :href="'/#/product/'+ product.slug ">
                            <p class="call-to-action">Add to Cart</p>
                        </a>
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
                product: '',
            }
        },

        mounted(){
            axios.get(this.$route.path)
                .then(response => this.product = response.data);
        }
    }
</script>