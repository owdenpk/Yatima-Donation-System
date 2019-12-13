@extends('layouts.master')

@section('title')
Edit User | Orphanage Donation System
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Edit "About Us" content</h3>
				</div>
				 <div class="row">
				 	<div class="col-md-6">
				 		<div class="card-body">
					<form action="/about-us-update/{{$abouts->id}}" method="POST">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" name="title" value="{{$abouts->title}}">
						</div>
						<div class="form-group">
							<label>Subtitle</label>
							<input type="text" class="form-control" name="subtitle" value="{{$abouts->subtitle}}">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" class="form-control" name="description" value="{{$abouts->description}}">
						</div>
						
						<button type="submit" class="btn btn-success">Update</button>
						<a href="/abouts"class="btn btn-warning">Cancel</a>
					</form>
				</div>
				 	</div>
				 </div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection