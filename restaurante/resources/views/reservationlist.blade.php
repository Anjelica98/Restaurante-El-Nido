<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESERVATION LIST</title>
</head>
<body>
    <!--vista de todas las reservas del panel de administrador--->
    <h1 class="text-2xl font-bold mb-4">Reservations</h1>

<table class="table-auto w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border p-2">Name</th>
            <th class="border p-2">Guests</th>
            <th class="border p-2">Time</th>
            <th class="border p-2">Status</th>
            <th class="border p-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $res)
        <tr>
            <td class="border p-2">{{ $res->name }}</td>
            <td class="border p-2">{{ $res->guest_count }}</td>
            <td class="border p-2">{{ $res->reservation_time->format('M d, Y H:i') }}</td>
            <td class="border p-2 capitalize">{{ $res->status }}</td>
            <td class="border p-2">
                <form method="POST" action="{{ route('admin.reservations.updateStatus', $res->id) }}">
                    @csrf
                    @method('PATCH')
                    <select name="status" onchange="this.form.submit()" class="border p-1 rounded">
                        <option value="pending" @selected($res->status == 'pending')>Pending</option>
                        <option value="confirmed" @selected($res->status == 'confirmed')>Confirmed</option>
                        <option value="cancelled" @selected($res->status == 'cancelled')>Cancelled</option>
                    </select>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
</body>
</html>