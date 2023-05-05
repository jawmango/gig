<div class="container-fluid py-5">
<div class="col-10 mx-auto">
<h1 class="text-center">Featured Performers</h1>
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
<p class="card-text">P{{$gigs['price']}}</p>
<p class="card-text">{{$gigs['description']}}</p>
<p class="card-text">{{$gigs['gig_type']}}</p>

<a href="/discover/addBooking" class="btn-dark-green text-decoration-none">Book Now</a>
</div>
</div>
@endforeach
</div>
</div>
</div>