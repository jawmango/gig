<div class="container-fluid py-5">
<div class="col-10 mx-auto">
<h1 class="text-center">GigLeague Performers</h1>
<div class="text-center my-4">
{{$slot}}
</div>
<div class="row row-cols-4 gap-5 justify-content-center">
@foreach($gigs as $gigs)
<div class="card col p-0">
<img src="{{ asset('/img/'.$gigs->img)}}" class="card-img-top"
alt="...">
<div class="card-body">
<h4 class="card-title">{{$gigs['performer_name']}}</h4>
<p class="card-text">Fee: P{{$gigs['price']}}</p>
<p class="card-text">Description: {{$gigs['description']}}</p>
<p class="card-text">Type: {{$gigs['gig_type']}}</p>

@if(auth()->user() && !($admin))
                            <a href="/discover/addBooking" class="btn text-decoration-none">Book Now</a>
                        @elseif(auth()->guest())
                            <a href="/login" class="btn text-decoration-none">Login to Book</a>
                        @else
                            <a href="/discover/edit/{{$gigs['id']}}" class="btn text-decoration-none">Edit</a>
                        @endif
</div>
</div>
@endforeach
</div>
</div>
</div>