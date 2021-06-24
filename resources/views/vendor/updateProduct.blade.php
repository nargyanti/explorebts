@extends('layouts.app')
@include('layouts.navigation')        
@section('content')
<h1 class="pt-4">Edit Product</h1>        
@include('layouts.error')
<div class="card mb-4">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Category</td>
                <td><select class="form-control ml-4" id="category" name="category" required>
                        <option value="Camping Tools" {{ $product->category == "Camping Tools" ? 'selected' : '' }}>Camping Tools</option>
                        <option value="Inn" {{ $product->category == "Inn" ? 'selected' : '' }}>Inn</option>
                        <option value="Jeep" {{ $product->category == "Jeep" ? 'selected' : '' }}>Jeep</option>
                        <option value="Trip" {{ $product->category == "Trip" ? 'selected' : '' }}>Trip</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Product Picture</td>
                <td><input type="file" name="picture" class="form-control-file ml-4" id="picture" ariadescribedby="Product Picture" value="{{ $product->picture }}"></td>                    
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="name" class="form-control ml-4" id="name" aria-describedby="name" placeholder="Product Name" value="{{ $product->name }}" required></td>
            </tr>
            <tr>
                <td>Unit Price</td>                    
                <td><input type="number" name="unit_price" class="form-control ml-4" id="unit_price" aria-describedby="unit_price" placeholder="Unit Price" value="{{ $product->unit_price }}" required></td>
            </tr>
            <tr>
                <td>Product Stock</td>                    
                <td><input type="number" name="stock" class="form-control ml-4" id="stock" aria-describedby="stock" placeholder="Product Stock" value="{{ $product->stock }}" required></td>
            </tr>
            <tr>
                <td>Product Description</td>                    
                <td><textarea name="description" id="description" class="form-control ml-4" aria-describedby="description" placeholder="Product Description" cols="10" rows="5" required>{{ $product->description }}</textarea></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection