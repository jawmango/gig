@extends('layouts.app')
@section('content')
<div class = "container">
<br>
<h1>User Bookings</h1>

<table class = "table">
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
        <td>
                <form method="POST" action="{{ route('delete', $booking->id) }}" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                </form>
            </td>
    </tr>
    
    @endforeach
</table>

@endsection