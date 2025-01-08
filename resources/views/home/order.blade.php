<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    @include('home.css')
    <style type="text/css">
        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 50px;
        }

        .frame-container {
            border: 3px solid #2c3e50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            border-radius: 10px;
            background-color: #ecf0f1;
            width: 80%;
        }

        .frame-container h2 {
            text-align: center;
            color: #16a085;
            margin-bottom: 30px;
        }

        .order-info {
            background-color: #fff;
            border: 2px solid #2980b9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .order-info h3 {
            text-align: center;
            color: #2980b9;
        }

        .order-info p {
            font-size: 16px;
            margin: 10px 0;
            color: #34495e;
        }

        .order-info .label {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        th {
            border: 2px solid #16a085;
            background-color: #1abc9c;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 3px solid #3498db;
            padding: 10px;
            background-color: #fff;
        }

        td img {
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->

        <!-- unified frame containing order details -->
        <div class="div_center">
            <div class="frame-container">
                <h2>Order Details</h2>

                <!-- Order Details -->
                <div class="order-info">
                    <h3>Order Information</h3>
                    <table>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Delivery Status</th>
                            <th>Image</th>
                        </tr>
                        @foreach ($order as $order)
                            <tr>
                                <td>{{ $order->product->title }}</td>
                                <td>${{ $order->product->price }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <img height="100" width="100" src="/products/{{ $order->product->image }}">
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <!-- footer section -->
        @include('home.footer')
    </div>
</body>

</html>
