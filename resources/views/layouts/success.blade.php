@if ($message = Session::get('success'))
    <div class="alert alert-success" style="height:50px">
        <p>{{ $message }}</p>
    </div>
@endif