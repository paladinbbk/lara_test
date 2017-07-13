<strong>Please, read <a href="{{ route('public.auth.conditions') }}">Terms and Conditions.</a></strong><br>
<form method="post">
    {{ csrf_field() }}

    @include('partial.editProfileForm')

    <input type="checkbox" name="is_confirmed">Accept Terms and Conditions<br>
    @if ($errors->has('is_confirmed'))
        <div class="warning_message">
            <strong> {{ $errors->first('is_confirmed') }} </strong><br>
        </div>
    @endif
    <br>
    <button class="btn btn-primary" type="submit" value="Sign In">Sign Up</button>
</form>