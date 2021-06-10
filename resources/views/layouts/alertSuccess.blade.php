@if ($message = Session::get('success'))
    <div class="alert alert-success mt-4 mb-2" style="height:50px">
        <p>{{ $message }}</p>
    </div>
@endif