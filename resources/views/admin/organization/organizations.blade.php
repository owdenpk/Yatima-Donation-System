@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">LIST OF ORGANIZATIONS</a>

@endsection

@section('search')
<form action="{{ url('searchorg')}}" method="post">
	{{csrf_field()}}
	{{method_field('GET')}}
	<div class="input-group no-border">
		<input type="text" name="q1" class="form-control" placeholder="Search...">
		<div class="input-group-append">
			<div class="input-group-text">
				<i class="now-ui-icons ui-1_zoom-bold"></i>
			</div>
		</div>
	</div>
</form>
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ENROLL NEW ORGANIZATION</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/org-add" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Organization Brand:</label>
						<input type="text" class="form-control" id="title" name="brandname">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Email:</label>
						<input type="email" class="form-control" id="subtitle" name="email">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Phone number:</label>
						<input type="text" class="form-control" id="subtitle" name="phone">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Reg No:</label>
						<input type="text" class="form-control" id="subtitle" name="regno">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Organization Description:</label>
						<textarea type="text" class="form-control" id="description" name="descr"></textarea>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Select the location</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<span class="error">{{$errors->first('lat')}}</span>
									<span class="error">{{$errors->first('long')}}</span>
									<event-location></event-location>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Password:</label>
						<input type="Password" class="form-control" id="description" name="password">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ADD ORGANIZATION</button>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif

			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<th>
								Brand Name
							</th>
							<th>
								Phone
							</th>
							<th>
								Reg No.
							</th>
							<th>
								Certificate
							</th>
							<th>
								Email
							</th>
							<th>
								User-Role
							</th>
							<th>
								Edit
							</th>
							<th>
								Delete
							</th>
						</thead>
						<tbody>
							@foreach($user as $receiver)
							<tr>
								<td>
									{{$receiver->name}}
								</td>
								<td>
									{{$receiver->phone}}
								</td>
								<td>
									{{$receiver->regno}}
								</td>
								<td>
									{{$receiver->certificate}}
								</td>
								<td>
									{{$receiver->email}}
								</td>
								<td>
									{{$receiver->usertype}}
								</td>
								<td>
									<a href="/org-edit/{{$receiver->id}}" class="btn btn-success">EDIT</a>
								</td>
								<td>
									<form class = "delete" action="org-delete/{{$receiver->id}}" method="post">
										{{csrf_field()}}
										{{method_field('DELETE')}}
										<button class="delete btn btn-danger" type="submit">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach

							<script>
								$(".delete").on("submit", function(){
									return confirm("Are you sure?");
								});
							</script>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@endsection
