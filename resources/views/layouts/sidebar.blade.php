@if (Auth::user()->role == 'Vendor')
<div class="col-lg-3 pt-4 text-center">
    <img src="{{ asset('assets/img/logo-bts.png') }}" width="75%">
    <div class="list-group">
        <a href="{{ route('product.create') }}" class="list-group-item">Add Product</a>                    
        <a href="{{ route('product.index') }}" class="list-group-item">Ordered Product</a>
    </div>
</div>
@else 
<div class="col-lg-3 pt-4 text-center">
    <img src="{{ asset('assets/img/logo-bts.png') }}" width="75%">
    <div class="list-group">
        <a href="#" class="list-group-item">My Order</a>
        <div class="list-group-item">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item list-group-item" href="#">Inn</a>
                <a class="dropdown-item list-group-item" href="#">Jeep</a>
                <a class="dropdown-item list-group-item" href="#">Trip</a>
                <a class="dropdown-item list-group-item" href="#">Camp Tools</a>
            </div>        
        </div>
    </div>
</div>
    <!-- /.sidemenu -->
@endif