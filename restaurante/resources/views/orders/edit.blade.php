<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Order</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="ordername" class="form-label"> Order Name:</label>
                        <input type="text" id="ordername" name="ordername" value="{{ $order->ordername }}" class="form-control" placeholder="Enter Order Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="customerno" class="form-label">CustomerNo:</label>
                        <input type="text" id="customerno" name="customerno" value="{{ $order->customerno }}" class="form-control" placeholder="Enter CustomerNo" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="{{ $order->quantity}}" class="form-control" placeholder="Enter Quantity" required>
                    </div>

                    <div class="mb-3">
                        <label for="total" class="form-label">Total:</label>
                        <input type="number" id="total" name="total" value="{{ $order->total}}" class="form-control" placeholder="Enter Total" required>
                    </div>
         
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" id="status" name="status" value="{{ $order->status}}" class="form-control" placeholder="Enter Status" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Order</button>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>