<div class="jumbotron">
    <div class="container text-center">
        <img src="{{ asset('assets/img/slider-jumbotron-1.png') }}" alt="First slide" style="" class="img-fluid">
        <form action="{{ route('home') }}" method="GET" class="form-inline justify-content-center">
                <input class="form-control mr-sm-2 w-50" type="search" placeholder="Search" name="search">
                <button class="btn my-2" type="submit" style="background-color:white; color:#F4623A">Search</button>
            </form>
            <!-- /.search -->
    </div>
</div>