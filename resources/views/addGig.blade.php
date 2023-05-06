@extends('layouts.app')
@section('content')
<div>
<div class="container-fluid p-5">
<div class="col-4 mx-auto p-4 border border-success border-2">
<h4 class="text-uppercase text-center">Add Performer</h4>
<form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
@csrf
<div class="row mb-2">
<div class="col-sm-12">
<div class="form-group">
<label for="performer_name">Performer Name</label>
<input class="form-control @error('performer_name')
is-invalid @enderror" required id="performer_name" name="performer_name"
type="text" placeholder="Enter performer name" value="{{ old('performer_name') }}">
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
<label for="gig_price">Performance Fee</label>
<input class="form-control @error('gig_price')
is-invalid @enderror" required id="gig_price" name="gig_price"
type="text" placeholder="Enter Fee" value="{{ old('gig_price')
}}">
@error('gig_price')
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
<label for="description">Description</label>
<input class="form-control @error('description')
is-invalid @enderror" required id="description" name="description"
type="text" placeholder="Enter Description" value="{{ old('description')
}}">
@error('description')
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
<div class="form-group">
<label for="img">Upload Image</label>
<div class="row">
<div class="col-sm-6 ">
<img id="preview-image-before-upload"
src="{{asset('/img/Upload Image.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;"
class=" mb-2">
<input class=" form-control @error('img')
is-invalid @enderror " type="file" name="img" value="{{ old('img') }}"
id="img">
@error('img')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<div class=" mt-5">
<button class="btn ">Add Performer</button>
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