<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Reservation</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('reservations.update',$reservation->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $reservation->name }}" class="form-control" placeholder="Enter Name" required>
                    </div>

                      <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{$reservation->phone}}" class="form-control" placeholder="Enter phone" required>
                            
                        </div>
                            <div class="mb-3">
                            <label for="guest_count" class="form-label">Number of Guests</label>
                            <input type="number" name="guest_count" id="guest_count" value="{{ $reservation->guest_count}}" min="1" class="form-control" required>
                           
                        </div>

                             <div class="mb-3">
                            <label for="reservation_time" class="form-label">Reservation Time</label>
                            <input type="datetime-local" name="reservation_time" id="reservation_time" value="{{ $reservation->reservation_time}}" class="form-control" required>
                            
                        </div>
                         <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" id="status" name="status" value="{{ $reservation->status}}" class="form-control" placeholder="Confirm Status" required>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update Reservation</button>
                        <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>