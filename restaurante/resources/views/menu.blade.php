@extends('nav')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTAURANT MENU</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
  @section('content')
    @foreach ($menuItemsByCategory as $categoryName => $itemsInThisCategory)
        <h2>{{ $categoryName }}</h2>
        <div class="menu-items-list">
            @foreach ($itemsInThisCategory as $item)
                <div class="menu-item">
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->description }}</p>
                    <span>${{ number_format($item->price, 2) }}</span>
                </div>
            @endforeach
        </div>
    @endforeach
   @endsection
</body>
</html>


{{-- resources/views/menu/customer-menu.blade.php --}}
@extends('layouts.app')

