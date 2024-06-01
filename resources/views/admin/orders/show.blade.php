<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Order Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                <p class="card-text">Customer: {{ $order->customer->name }}</p>
                <p class="card-text">Order Date: {{ $order->orderDate }}</p>
                <p class="card-text">Total Amount: @rp($order->totalAmount)</p>
                <hr>
                <h5 class="card-title">Order Items</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderDetails as $detail)
                        <tr>
                            <td>{{ $detail->product->name }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>@rp($detail->price)</td>
                            <td>@rp($detail->quantity * $detail->price)</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <h5 class="card-title">Update Order Status</h5>
                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control">
                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Diproses</option>
                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="resi">Resi</label>
                        <input type="text" id="resi" name="resi" class="form-control" value="{{ $order->resi }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>