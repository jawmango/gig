@extends('layouts.app')
@section('content')
<div class="container-fluid discover-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-opacity-50 text-white p-5 ">
        <h1 class="mb-4">Discover Music Performers</h1>
    </div>
</div>
<x-gig :gigs="$gigs" :admin="$admin">
    @if($admin)
    <a href="/discover/add">
    <button class="btn text-white text-uppercase border-0
    py-2 px-4">Add Performer</button>
    </a>
    @else
        @if(auth()->user() && !($admin))
        <a href="/discover/addP">
        <button class="btn text-white text-uppercase border-0
        py-2 px-4">Apply as Performer</button>
        </a>
        @elseif(auth()->guest())
        <a href="/login" class="btn text-decoration-none">Login to Apply as Performer</a>
        @endif
@endif
</x-gig>
@endsection