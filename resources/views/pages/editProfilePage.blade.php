<form method="post">
    {{ csrf_field() }}

    @include('partial.editProfileForm')
    
    <button class="btn btn-primary" type="submit">Save</button>
</form>