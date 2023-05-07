@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search Performer Name \ Gig Type \ Price" />
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Performer Name</th>
                                    <th>Gig Type</th>
                                    <th>Price</th>
                                    <th>Book</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class = "container">
<br>
<h1>User Bookings</h1>

<table class = "table">
    <tr>
        <td>User_ID</td>
        <td>Performer Name</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Gig Location</td>
        <td>Gig Type</td>
        <td>Gig Date</td>
        
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
