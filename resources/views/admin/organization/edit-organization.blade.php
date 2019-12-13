@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Edit Organization Details</h3>
				</div>
				 <div class="row">
				 	<div class="col-md-6">
				 		<div class="card-body">
					<form action="/org-update/{{$receiver->id}}" method="POST">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label>Brand Name</label>
							<input type="text" class="form-control" name="brandname" value="{{$receiver->name}}">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" name="phone" value="{{$receiver->phone}}">
						</div>
						<div class="form-group">
							<label>Reg No.</label>
							<input type="text" class="form-control" name="regno" value="{{$receiver->regno}}">
						</div>
						<div class="form-group">
							<label>Latitude</label>
							<input type="text" class="form-control" name="lat" value="{{$receiver->lat}}">
						</div>
						<div class="form-group">
							<label>Longitude</label>
							<input type="text" class="form-control" name="long" value="{{$receiver->long}}">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" class="form-control" name="descr" value="{{$receiver->description}}">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" name="email" value="{{$receiver->email}}">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="address" value="{{$receiver->address}}">
						</div>
						<div class="form-group">
							<label>Website</label>
							<input type="text" class="form-control" name="website" value="{{$receiver->website}}">
						</div>
						<div class="form-group">
							<label>User Role</label>
							<select name="usertype" class="form-control">
								<option value="admin">Admin</option>
								<option value="organization">Organization</option>
								<option value="donor">Donor</option>
							</select>
						</div>
						<button type="submit" class="btn btn-success">Update</button>
						<a href="/searchorg"class="btn btn-warning">Cancel</a>
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