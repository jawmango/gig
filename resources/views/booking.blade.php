@extends('layouts.app')
@section('content')

<h1>User Bookings</h1>

<table border = "1">
    @foreach($bookings as $booking)
    <tr>
        <td>{{$booking['user_id']}}</td>
        <td>{{$booking['performer_name']}}</td>
        <td>{{$booking['client_name']}}</td>
        <td>{{$booking['client_email']}}</td>
        <td>{{$booking['phone']}}</td>
        <td>{{$booking['gig_location']}}</td>
        <td>{{$booking['gig_type']}}</td>
        <td>{{$booking['date']}}</td>
    </tr>
    @endforeach
</table>

@endsection