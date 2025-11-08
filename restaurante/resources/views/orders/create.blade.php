@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Add Order</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ordername">Order Name</label>
            <input type="text" name="ordername" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="customerno">CustomerNo</label>
            <input type="text" name="customerno" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection