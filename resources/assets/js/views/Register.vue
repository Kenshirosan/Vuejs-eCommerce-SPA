<template>
<section class="form">
    <div class="register-box">
        <div class="register-box-body">

            <form action="" method="post">

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                   
                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" name="address2" class="form-control" placeholder="Address2">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" name="zipcode" class="form-control" placeholder="zipcode">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>


                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block btn-flat">Register</button>
            </form>

        </div>
    </div>
</section>
</template>

<script>
	export default {
		
	}
</script>	