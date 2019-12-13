@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Waiting for Approval</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Your account is waiting for our administrator approval.
                    <br />
                    Please check back later.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection