@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h2>Add Item</h2>
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0"> <!-- 2HORAS BUSCANDO EL ERROR --->
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
            <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection