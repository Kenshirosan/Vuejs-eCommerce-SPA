<div class="register-box-body">
        <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
        <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                       placeholder="{{ trans('adminlte::adminlte.email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                       placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('last_name') ? 'has-error' : '' }}">
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}"
                       placeholder="Last name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                       placeholder="Address">
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('address2') ? 'has-error' : '' }}">
                <input type="text" name="address2" class="form-control" value="{{ old('address2') }}"
                       placeholder="Address2">
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                @if ($errors->has('address2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address2') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                <input type="text" name="zipcode" class="form-control" value="{{ old('zipcode') }}"
                       placeholder="zipcode">
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                @if ($errors->has('zipcode'))
                    <span class="help-block">
                        <strong>{{ $errors->first('zipcode') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}"
                       placeholder="Phone number">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" name="password" class="form-control"
                       placeholder="{{ trans('adminlte::adminlte.password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control"
                       placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit"
                    class="btn btn-primary btn-block btn-flat"
            >{{ trans('adminlte::adminlte.register') }}</button>
        </form>
        <div class="auth-links">
            <a href="{{ url(config('adminlte.login_url', 'login')) }}"
               class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
        </div>
    </div>