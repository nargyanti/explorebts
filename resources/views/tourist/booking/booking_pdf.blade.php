<!DOCTYPE html>
<html>
    <head>
        <title>Invoices - Explore BTS</title>
    </head>
    <body>
        <style type="text/css">
            .{
                font-family: Arial, Helvetica, sans-serif;
            }
            table{
                border: 1px solid #ddd;
                width: 100%;
                padding: 8px;
                text-align: left;
            }

            th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #f4623a;
                color: white;
            }

            table tr td,
            table tr th{
                font-size: 14pt;
            }

            p{
                margin-left: 1rem;
                font-size: 14pt;
            }

            h1{
                font-size: 28pt;
            }
        </style>
        
        <img src="{{ storage_path('app/public/img/kop-nota.png')}}" alt="" margin="0 0 0 0">
        <center>
            <h2>Invoice</h2>
        </center>
        <p>
        Tourist Name    : {{ $booking->user->name }} <br>
        Vendor Name     : {{ $booking->product->user->name }} <br>
        Booking For     : {{ $booking->start_date }}<br>
        </p>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product / Service</th>
                    <th>Quantity</th>
                    <th>Total Days</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $booking->product->name }}</td>
                        <td>{{ $booking->quantity }}</td>
                        <td>{{ $booking->total_days }}</td>
                        <td>{{ $booking->product->unit_price }}</td>
                        <td>{{ $booking->total_price }}</td>
                    </tr>
            </tbody>
        </table>

        <br><br><br>
        <center>
            <p>
                <b> Thankyou for purchasing!</b>
            </p>
        </center>
    </body>
</html>