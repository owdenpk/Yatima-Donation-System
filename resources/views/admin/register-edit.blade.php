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
					<h3>Edit Role for Registered Users</h3>
				</div>
				 <div class="row">
				 	<div class="col-md-6">
				 		<div class="card-body">
					<form action="/role-register-update/{{$users->id}}" method="POST">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="username" value="{{$users->name}}">
						</div>
						<div class="form-group">
							<label>Give Role</label>
							<select name="usertype" class="form-control">
								<option value="admin">Admin</option>
								<option value="organization">Organization</option>
								<option value="donor">Donor</option>
							</select>
						</div>
						<button type="submit" class="btn btn-success">Update</button>
						<a href="/searchuser"class="btn btn-warning">Cancel</a>
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