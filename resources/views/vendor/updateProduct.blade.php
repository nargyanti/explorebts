@extends('layouts.app')

@section('content')
    @include('layouts.navigation')
    <h1>Update Product</h1>            
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
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Category</td>
                <td><select class="form-control" id="category" name="category" required>
                        <option value="Camping Tools" {{ $product->category == "Camping Tools" ? 'selected' : '' }}>Camping Tools</option>
                        <option value="Inn" {{ $product->category == "Inn" ? 'selected' : '' }}>Inn</option>
                        <option value="Jeep" {{ $product->category == "Jeep" ? 'selected' : '' }}>Jeep</option>
                        <option value="Trip" {{ $product->category == "Trip" ? 'selected' : '' }}>Trip</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Product Picture</td>
                <td><input type="file" name="picture" class="form-control-file" id="picture" ariadescribedby="Product Picture" value="{{ $product->picture }}"></td>                    
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Product Name" value="{{ $product->name }}" required></td>
            </tr>
            <tr>
                <td>Unit Price</td>                    
                <td><input type="number" name="unit_price" class="form-control" id="unit_price" aria-describedby="unit_price" placeholder="Unit Price" value="{{ $product->unit_price }}" required></td>
            </tr>
            <tr>
                <td>Product Stock</td>                    
                <td><input type="number" name="stock" class="form-control" id="stock" aria-describedby="stock" placeholder="Product Stock" value="{{ $product->stock }}" required></td>
            </tr>
            <tr>
                <td>Product Description</td>                    
                <td><textarea name="description" id="description" class="form-control" aria-describedby="description" placeholder="Product Description" cols="10" rows="5" required>{{ $product->description }}</textarea></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-light">Submit</button>
    </form>
@endsection