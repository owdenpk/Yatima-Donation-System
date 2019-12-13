@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">Reports</a>

@endsection

@section('content')
<div class="container">
    <div style="padding-bottom: 50px;"></div>
    <div class="row">
        <div class="col-md-4">
            <a href="./userreport" class="btn btn-primary btn-lg btn-block"><div style="padding-top: 30px; padding-bottom:30px;">User Report</div></a>
        </div>
        <div class="col-md-4">
            <a href="./campaignreport" class="btn btn-primary btn-lg btn-block"><div style="padding-top: 30px; padding-bottom:30px;">Campaigns Posted</div></a>
        </div>
        <div class="col-md-4">
            <a href="./profilereport" class="btn btn-primary btn-lg btn-block"><div style="padding-top: 30px; padding-bottom:30px;">User Profiles</div></a>
        </div>
    </div>
</div>
@endsection