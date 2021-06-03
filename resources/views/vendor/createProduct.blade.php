@extends('layouts.app')

@section('content')
    @include('layouts.navigation')        
    <h1 class="pt-4">Add Service</h1>
    <!--form!-->
    <div class="container">        
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <table>
                <tr class="my-1">
                    <td>Category</td>
                    <td><select class="form-control" id="category" name="category" required>
                            <option value="Camping Tools">Camping Tools</option>
                            <option value="Inn">Inn</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Trip">Trip</option>
                        </select>
                    </td>
                </tr>
                <tr class="my-1">
                    <td>Product Picture</td>
                    <td><input type="file" name="picture" class="form-control-file" id="picture" ariadescribedby="Product Picture" required></td>                    
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Product Name" required></td>
                </tr>
                <tr>
                    <td>Unit Price</td>                    
                    <td><input type="number" name="unit_price" class="form-control" id="unit_price" aria-describedby="unit_price" placeholder="Unit Price" required></td>
                </tr>
                <tr>
                    <td>Product Stock</td>                    
                    <td><input type="number" name="stock" class="form-control" id="stock" aria-describedby="stock" placeholder="Product Stock" required></td>
                </tr>
                <tr>
                    <td>Product Description</td>                    
                    <td><textarea name="description" id="description" class="form-control" aria-describedby="description" placeholder="Product Description" cols="10" rows="5" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-light">Submit</button>
        </form>
    </div>
@endsection
