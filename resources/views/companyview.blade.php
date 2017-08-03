
@extends ('master')

@section('content')
<h1 class="text-center">company view</h1>

<div class="row">
    <div class="col-md-4">
        <h3>MANICURE BOOKING INFORMATION</h3>

        @foreach ($manicurebookings as $manicurebooking)
            <p>{{ $manicurebooking->date }}</p>
            <p>{{ $manicurebooking->time }}</p>
            <hr>
        @endforeach
    </div>

    <div class="col-md-4">
        <h3>PEDICURE BOOKING INFORMATION</h3>

        @foreach ($pedicurebookings as $pedicurebooking)
            <p>{{ $pedicurebooking->date }}</p>
            <p>{{ $pedicurebooking->time }}</p>
            <hr>
        @endforeach
    </div>

    <div class="col-md-4">
        <h3>HAIRCUT BOOKING INFORMATION</h3>

        @foreach ($haircutbookings as $haircutbooking)
            <p>{{ $haircutbooking->date }}</p>
            <p>{{ $haircutbooking->time }}</p>
            <hr>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">CURRENT BOOKING INFORMATION</h3>
            @foreach ($bookings as $booking)
                <p>{{ $booking->treatment }}</p>
                <p>{{ $booking->date }}</p>
                <p>{{ $booking->time }}</p>
                <hr>
            @endforeach
    </div>
</div>
@endsection