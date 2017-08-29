
@extends ('master')

@section('content')
<h1 class="text-center">company view</h1>

<div class="row">
    <div class="col-md-4">
        <h3>MANICURE BOOKING INFORMATION</h3>

        @foreach ($manicurebookings as $manicurebooking)
            <p>{{ $manicurebooking->date }} {{ $manicurebooking->time }}</p>
            <hr>
        @endforeach
    </div>

    <div class="col-md-4">
        <h3>PEDICURE BOOKING INFORMATION</h3>

        @foreach ($pedicurebookings as $pedicurebooking)
            <p>{{ Carbon\Carbon::parse($pedicurebooking->date)->format('d M Y') }} {{ $pedicurebooking->time }}</p>
            <hr>
        @endforeach
    </div>

    <div class="col-md-4">
        <h3>HAIRCUT BOOKING INFORMATION</h3>

        @foreach ($haircutbookings as $haircutbooking)
            <p>{{ $haircutbooking->date }} {{ $haircutbooking->time }}</p>
            <hr>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">CURRENT BOOKING INFORMATION</h3>
            @foreach ($bookings as $booking)
                <p>{{ $booking->treatment }} {{ $booking->date }} {{ $booking->time }}</p>
                <hr>
            @endforeach
    </div>
</div>
@endsection