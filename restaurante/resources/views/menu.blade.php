
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU</title>
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container py-5">

     <h1 class="mb-5 text-center fw-bold">Our Menu</h1>

    {{-- Category Tabs --}}
    <ul class="nav nav-pills justify-content-center mb-4">
        <li class="nav-item">
            <a class="nav-link {{ request('category') == null ? 'active' : '' }}" href="{{ url('/menu') }}">All</a>
        </li>
        @foreach ($categories as $cat)
            <li class="nav-item">
                <a class="nav-link {{ request('category') == $cat ? 'active' : '' }}" href="{{ url('/menu?category='.$cat) }}">
                    {{ $cat }}
                </a>
            </li>
        @endforeach
    </ul>

    {{-- Menu Items Grid --}}
    <div class="row g-4">
        @forelse ($items as $item)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                 
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white border-0">
                        <span class="fw-bold text-primary">${{ $item->price }}</span>
                        <span class="badge bg-secondary">{{ $item->category }}</span>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center mt-5">No items found in this category.</p>
        @endforelse
    </div>
    </div>
</body>
</html>
