@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">ABOUT US</a>

@endsection

@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New "about us"</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/save-aboutus" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Title:</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Subtitle:</label>
						<input type="text" class="form-control" id="subtitle" name="subtitle" required>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Description:</label>
						<textarea type="text" class="form-control" id="description" name="description" required></textarea>
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
				
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ADD</button>
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
								Title
							</th>
							<th>
								Sub-Title
							</th>
							<th>
								Description
							</th>
							<th>
								Edit
							</th>
							<th>
								Delete
							</th>
						</thead>
						<tbody>
							@foreach ($abouts as $row)
							<tr>
								<td>
									{{$row->title}}
								</td>
								<td>
									{{$row->subtitle}}
								</td>
								<td>
									{{$row->description}}
								</td>
								<td>
									<a href="/about-fetch/{{$row->id}}" class="btn btn-success">EDIT</a>
								</td>
								<td>
									<form action="about-us-delete/{{$row->id}}" method="post">
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