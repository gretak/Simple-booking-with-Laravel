@extends ('master')

@section('content')
    <p>client view</p>

    <!-- @foreach ($bookings as $booking)
    <li>{{ $booking->date }}</li>
    <p>{{ $booking->time }}</p>
    <p>{{ $booking->treatment }}</p>
    @endforeach -->

<div class="row">
  <div class="col-md-5">
    <form method="POST" action="/bookings">
    {{ csrf_field() }}
        <select class="form-control" name="treatment">
          <option>manicure</option>
          <option>pedicure</option>
          <option>haircut</option>
      </select>
      <select class="form-control" name="time">
          <option>9:00</option>
          <option>10:00</option>
          <option>11:00</option>
      </select>
      <select class="form-control" name="date">
          <option>24 Jan</option>
          <option>25 Jan</option>
          <option>26 Jan</option>
      </select>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection

