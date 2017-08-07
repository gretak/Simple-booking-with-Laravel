
@extends ('master')

@section('content')
<h1 class="text-center">Thanks you for your booking</h1>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">YOUR BOOKING INFORMATION</h3>

                @foreach ($latestbookings as $latestbooking)
                <p>{{ $latestbooking->treatment }}</p>
                <p>{{ $latestbooking->date }}</p>
                <p>{{ $latestbooking->time }}</p>
                <hr>
                @endforeach
     
                <form action="/thankyou" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-info">Click here to cancel your booking</button>
                </form>

    </div>
</div>
@endsection