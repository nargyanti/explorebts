<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bts.png') }}" type="image/x-icon">
    <title>Explore BTS</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/shop-homepage.css') }}" rel="stylesheet">
    <style>
        .navbar {
            background-color: #f4623a;
        }

        td {
            padding-right: 25px;
            padding-bottom: 10px;
        }

        h1 {
            text-align: center;
            padding-top: 25px;
            padding-bottom: 10px;
        }

        body {
            background: linear-gradient(to bottom, #f4623a 0%, #343a40 100%);
            color: white;
        }

        /* input[type=button],
        input[type=submit],
        input[type=reset] {
            border: 1px;
            color: #343a40;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        } */
    </style>
</head>

<body>
    <!-- navbar -->
    @include('layouts.navigation')
    <!-- navbar -->
    <h1>Add Service</h1>
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
                <tr>
                    <td>Category</td>
                    <td><select class="form-control" id="category" name="category" required>
                            <option value="Camping Tools">Camping Tools</option>
                            <option value="Inn">Inn</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Trip">Trip</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Product Picture</td>
                    <td><input type="file" name="picture" id="picture" ariadescribedby="Product Picture" required></td>                    
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
    <!-- Footer -->
    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2021 - Advanced Web Programming TI-2H</p>
        </div>
    </footer>
</body>

</html>
