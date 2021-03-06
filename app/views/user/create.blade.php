@extends('template')
@section('conteudo')
<form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
    <input type="hidden" name="csrf_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
        <input placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">

        <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
        <input placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">

        <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
        <input placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">

        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
        <input placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">

        @if ( Session::get('error') )
            <div class="alert alert-error">
                @if ( is_array(Session::get('error')) )
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>
@stop
