@extends('layouts.app')
@include('layouts.navigation')        
@section('content')
    <h1 class="pt-4">Add Product</h1>
    <!--form!-->
    <div class="card mb-3">        
        @include('layouts.error')
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf
            <table>
                <tr class="my-1">
                    <td>Category</td>
                    <td><select class="form-control ml-4" id="category" name="category" required>
                            <option value="Camping Tools">Camping Tools</option>
                            <option value="Inn">Inn</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Trip">Trip</option>
                        </select>
                    </td>
                </tr>
                <tr class="my-1">
                    <td>Product Picture</td>
                    <td><input type="file" name="picture" class="form-control-file ml-4" id="picture" ariadescribedby="Product Picture" required></td>                    
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="name" class="form-control ml-4" id="name" aria-describedby="name" placeholder="Product Name" required></td>
                </tr>
                <tr>
                    <td>Unit Price</td>                    
                    <td><input type="number" name="unit_price" class="form-control ml-4" id="unit_price" aria-describedby="unit_price" placeholder="Unit Price" required></td>
                </tr>
                <tr>
                    <td>Product Stock</td>                    
                    <td><input type="number" name="stock" class="form-control ml-4" id="stock" aria-describedby="stock" placeholder="Product Stock" required></td>
                </tr>
                <tr>
                    <td>Product Description</td>                    
                    <td><textarea name="description" id="description" class="form-control ml-4" aria-describedby="description" placeholder="Product Description" cols="10" rows="5" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
