<div class="container-fluid py-5 bg-light border border-2 border-secondary rounded-3">
  <div class="col-10 mx-auto">
    <h1 class="text-center mb-5">GigLeague Performers</h1>
    <div class="text-center my-4">
      {{$slot}}
    </div>
    <div class="row row-cols-4 gap-5 justify-content-center">
      @foreach($gigs as $gigs)
      <div class="card col p-0 border border-2 border-secondary rounded-3">
        <img src="{{ asset('/img/'.$gigs->img)}}" class="card-img-top rounded-3" alt="...">
        <div class="card-body d-flex flex-column">
          <h4 class="card-title text-center mb-4"><strong>{{$gigs['performer_name']}}</strong></h4>
          <div class="mb-3">
            <p class="card-text fw-bold fs-5 text-primary">Fee: P{{$gigs['price']}}</p>
            <p class="card-text text-muted fst-italic">{{ substr($gigs['description'], 0, 100) }}{{ strlen($gigs['description']) > 100 ? '...' : '' }}</p>
            <p class="card-text"><span class="fw-bold">Type:</span> <span class="text-primary">{{$gigs['gig_type']}}</span></p>
          </div>
          <div class="mt-auto">
            @if(auth()->user() && !($admin))
            <a href="/discover/addBooking?performer_name={{ $gigs->performer_name }}" class="btn btn-primary text-white text-decoration-none d-block w-100 mb-3">Book Now</a>
            @elseif(auth()->guest())
            <a href="/login" class="btn btn-primary text-white text-decoration-none d-block w-100 mb-3">Login to Book</a>
            @else
            <div class="d-flex justify-content-center">
              <a href="/discover/edit/{{$gigs['id']}}" class="btn btn-secondary text-white text-decoration-none me-3">Edit</a>
              <form action="{{route('delete', ['id' => $gigs['id']])}}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" value="Delete" name="submit" class="btn btn-danger text-white text-decoration-none " onclick="return confirm('Are you sure to delete?')">Delete </button>
              </form>
            </div>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
