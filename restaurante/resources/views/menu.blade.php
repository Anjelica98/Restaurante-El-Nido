<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENU</title>
    <link href="{{ asset('css/m.css') }}" rel="stylesheet" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <div class="container py-5">

    {{-- Título centrado --}}
    <div class="text-center mb-4">
    <div class="title-container">
    <h1 class="text-center fw-bold mb-5">Nuestro Menú</h1>
    <a href="{{ url('/guest') }}" class="btn-home">
     <i class="bi bi-house-door"></i> Inicio</a> <!--botón de inicio-->
    </div>
    </div>

    {{-- CONTENEDOR DIFERENCIADO --}}
    <div class="menu-container">

        {{-- Categorías en forma de pestañas --}}
        <ul class="nav nav-pills justify-content-center mb-4">
            <li class="nav-item">
                <a class="nav-link {{ request('category') == null ? 'active' : '' }}" href="{{ url('/menu') }}">
                    Todo
                </a>
            </li>

            @foreach ($categories as $cat)
                <li class="nav-item">
                    <a class="nav-link {{ request('category') == $cat ? 'active' : '' }}" 
                       href="{{ url('/menu?category=' . $cat) }}">
                        {{ $cat }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{-- GRID DE PLATOS --}}
        <div class="row g-4">
            @forelse ($items as $item)
                <div class="col-md-4">
                    <div class="card menu-card border-0 h-100">
                       

                        <div class="card-body">
                            <h5 class="fw-bold">{{ $item->name }}</h5>
                        </div>

                        <div class="card-footer d-flex justify-content-between bg-white border-0">
                            <span class="fw-bold text-primary">${{ ($item->price) }}</span>
                            <span class="badge bg-secondary">{{ $item->category }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center mt-4 fs-5">No hay platos en esta categoría.</p>
            @endforelse
        </div>

    </div>
</div>
    <script src="https://kit.fontawesome.com/04111552cb.js" crossorigin="anonymous"></script> 
</body>
</html>