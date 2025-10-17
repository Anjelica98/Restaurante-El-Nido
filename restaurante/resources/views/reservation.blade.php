<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESERVATION FORM</title>
</head>
<body>
            <div class="max-w-lg mx-auto mt-10 p-6 border rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-4 text-center">Make a Reservation</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border p-2 rounded">
            @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

      
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Phone</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border p-2 rounded">
            @error('phone') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Number of Guests</label>
            <input type="number" name="guest_count" value="{{ old('guest_count') }}" class="w-full border p-2 rounded">
            @error('guest_count') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Reservation Time</label>
            <input type="datetime-local" name="reservation_time" value="{{ old('reservation_time') }}" class="w-full border p-2 rounded">
            @error('reservation_time') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Submit Reservation
        </button>
    </form>
</div>
</body>
</html>