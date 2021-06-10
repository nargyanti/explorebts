@if ($message = Session::get('failed'))
    <div class="alert alert-danger" style="height:50px">
        <p>{{ $message }}</p>
    </div>
@endif