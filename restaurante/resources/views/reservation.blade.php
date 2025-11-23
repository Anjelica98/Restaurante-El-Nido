
@extends('nav')<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="{{ asset('css/reservation.css') }}" rel="stylesheet" />  
    <title>RESERVATION FORM</title>
</head>
<body>
    @section('content')
    <div class="register-photo">
        <div class="form-container">
        <div class="image-holder"></div><!--se estiliza en el css-->
        <form action="{{ route('reservations.store')}}" method="POST">       
        @csrf 
            <h2 class="text-center">Make a <strong>Reservation</strong></h2>
            <div class="form-group"><input class="form-control" type="text" name="name" value="{{ old('name') }}">
                 @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>
          <div class="form-group">
            <input class="form-control"  type="text" name="phone" value="{{ old('phone') }}">
            @error('phone') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="guest_count" value="{{ old('guest_count') }}" placeholder="number of guests">
         @error('guest_count') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
           <input type="datetime-local" name="reservation_time" value="{{ old('reservation_time') }}">
           @error('reservation_time') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>
            <div class>  <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Submit Reservation
        </button></div>   
        </form><!--closing the form--->
        </div><!--closing form container-->
    </div><!--closing photo container-->
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>