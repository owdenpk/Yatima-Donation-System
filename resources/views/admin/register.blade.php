@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">REGISTERED USERS</a>

@endsection

@section('search')
<form method="POST" role="search" action="./searchuser">
	{{csrf_field()}}
	{{method_field('GET')}}
	<div class="input-group no-border">
		<input type="text" value="" class="form-control" placeholder="Search..." name="q">
		<div class="input-group-append">
			<div class="input-group-text">
				<i class="now-ui-icons ui-1_zoom-bold"></i>
			</div>
		</div>
	</div>
</form>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<th>
								Name
							</th>
							<th>
								Email
							</th>
							<th>
								Phone
							</th>
							<th>
								User Role
							</th>
							<th>
								Action
							</th>
							<th>
								Action
							</th>
							
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>
									{{$user->name}}
								</td>
								<td>
									{{$user->email}}
								</td>
								<td>
									{{$user->phone}}
								</td>
								<td>
									{{$user->usertype}}
								</td>
								<td>
									<a href="/role-edit/{{$user->id}}" class="btn btn-success">Edit</a>
								</td>
								<td>
									<form class = "delete" action="role-delete/{{$user->id}}" method="post">
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