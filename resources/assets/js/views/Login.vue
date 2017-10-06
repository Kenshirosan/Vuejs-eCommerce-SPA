<template>
<section class="form">
	<div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">Login</p>
            <form action="" @submit.prevent="onSubmit" method="POST">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="email"  v-model="form.email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control"
                           placeholder="password" v-model="form.password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</template>

<script>
   export default{
        data() {
            return {
                form: new Form({ email: '', password: ''})
            }
        },
        methods: {
            onSubmit() {
                if(!this.form.email || !this.form.password) {
                    flashdanger('formulaire invalide !');
                    return;
                }
                this.form.post('/login')
                    .then(flash('You are now logged in')).then(window.location.replace("/"));
            }
        }
    }
</script>