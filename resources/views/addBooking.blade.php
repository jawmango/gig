@extends('layouts.app')
@section('content')
<div>
<div class="container-fluid p-5">
<div class="col-4 mx-auto p-4 border border-success border-2">
<h4 class="text-uppercase text-center">Book Performer</h4>
<form method="POST" action="{{route('storeBooking')}}" enctype="multipart/form-data">
@csrf
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
    <label for="performer_name">Performer Name</label>
    <input class="form-control @error('performer_name') is-invalid @enderror" required id="performer_name" name="performer_name" type="text" placeholder="Enter performer name" value="{{ $performer_name }}" readonly>
    @error('performer_name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_name">Client Name</label>
<input class="form-control @error('client_name')
is-invalid @enderror" required id="client_name" name="client_name"
type="text" placeholder="Enter client name" value="{{ old('client_name') }}">
@error('client_name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_email">Email</label>
<input class="form-control @error('client_email')
is-invalid @enderror" required id="client_email" name="client_email"
type="text" placeholder="Enter email" value="{{ old('client_email')
}}">
@error('client_email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="client_phone">Client Phone</label>
<input class="form-control @error('client_phone')
is-invalid @enderror" required id="client_phone" name="client_phone"
type="text" placeholder="Enter phone number" value="{{ old('client_phone')
}}">
@error('client_phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="gig_date">Gig Date</label>
<input class="form-control @error('gig_date')
is-invalid @enderror" required id="gig_date" name="gig_date"
type="text" placeholder="Enter Date" value="{{ old('gig_date')
}}">
@error('gig_date')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="gig_location">Gig Location</label>
<input class="form-control @error('gig_location')
is-invalid @enderror" required id="gig_location" name="gig_location"
type="text" placeholder="Enter location" value="{{ old('gig_location')
}}">
@error('gig_location')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="gig_type">Performer Type (e.g band, solo, etc.)</label>
<input class="form-control @error('gig_type')
is-invalid @enderror" required id="gig_type" name="gig_type"
type="text" placeholder="Enter Type" value="{{ old('gig_type')
}}">
@error('gig_type')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<!-- /.row-->

<div class=" mt-5">
<button class="btn ">Book Now</button>
</div>
</form>
</div>
</div>
</div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
$('#img').change(function() {
let reader = new FileReader();
reader.onload = (e) => {
$('#preview-image-before-upload').attr('src', e.target.result);
}
reader.readAsDataURL(this.files[0]);
});
});
</script>
@endsection