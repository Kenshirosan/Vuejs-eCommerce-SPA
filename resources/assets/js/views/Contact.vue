<template>
    <section class="form">
        <form action="" @submit.prevent="onSubmit" @keydown="form.errors.clear()">
            <input type="text" id="name" name="name" placeholder="your name" v-model="form.name">
        <span class="help is-danger" v-if="this.form.errors.has('name')" v-text="this.form.errors.get('name')"></span>
            <input type="email" id="email" name="email" placeholder="your email" v-model="form.email">
        <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
            <textarea name="body" id="body" placeholder="your message" v-model="form.body" cols="30" rows="10"></textarea>
        <span class="help is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
            <button type="submit" name="submit" :disabled="form.errors.any()">Envoyer</button>
        </form>
    </section>

</template>

<script>
    export default{
        data() {
            return {
                form: new Form({ name: '', email: '', body: ''})
            }
        },
        methods: {
            onSubmit() {
                if(!this.form.body || !this.form.name || !this.form.email) {
                    flashdanger('formulaire invalide !');
                    // return;
                }
                this.form.post('/messages')
                    .then(flash('Merci, nous vous contacterons bientot !'));
            }
        }
    }
</script>

<style>

</style>