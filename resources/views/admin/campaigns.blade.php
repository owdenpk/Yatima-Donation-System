@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">Fundraising Campaigns Posted</a>

@endsection

@section('search')
<form action="{{ url('admin_campaigns')}}" method="post">
	{{csrf_field()}}
	{{method_field('GET')}}
	<div class="input-group no-border">
		<input type="text" name="q" class="form-control" placeholder="Search...">
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
			<div class="card-header">
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
								Posted by
							</th>
							<th>
								Title
							</th>
							<th>
								Reg No.
							</th>
							<th>
								Duration
							</th>
							<th>
								Target Amount
							</th>
							<th>
								Delete
							</th>
						</thead>
						<tbody>
							@foreach($campaigns as $campaign)
							<tr>
								<td>
									{{$campaign->user->name}}
								</td>
								<td>
									{{$campaign->caption}}
								</td>
								<td>
									{{$campaign->description}}
								</td>
								<td>
									{{$campaign->duration}}
								</td>
								<td>
									{{$campaign->amount}}
								</td>
								<td>
									<form class = "delete" action="campaigndelete/{{$campaign->id}}" method="post">
										{{csrf_field()}}
										{{method_field('DELETE')}}
										<button class="delete btn btn-danger" type="submit">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach

							<script>
								$(".delete").on("submit", function(){
									return confirm("Are you sure wanna delete this?");
								});
							</script>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@endsection
