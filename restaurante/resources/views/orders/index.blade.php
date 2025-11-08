@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Order List</h2>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add Order</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>OrderName</th>
                <th>CustomerNo</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->ordername }}</td>
                    <td>{{ $order->customerno}}</td>
                    <td>{{ $order->quantity}}</td>
                    <td>{{ $order->total}}</td>
                     <td>{{ $order->status}}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection