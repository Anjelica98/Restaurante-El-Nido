@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Reservation List</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Reservation Time</th>
                <th>Guest Count</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $res)
                <tr>
                    <td>{{ $res->name }}</td>
                    <td>{{ $res->phone}}</td>
                    <td>{{ $res->reservation_time->format('M d, Y H:i')  }}</td>
                    <td>{{ $res->guest_count }}</td>
                    <td>{{ $res->status}}</td>
                    
                    
                    <td>
                        <a href="{{ route('customers.edit', $res->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('customers.destroy', $res->id) }}" method="POST" style="display:inline;">
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