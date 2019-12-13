@extends('layouts.master')

@section('heading')

<a class="navbar-brand" href="/dashboard">Admin Profile</a>

@endsection

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                  @foreach($admin as $admin1)
                <form action="/adminprofile-update/{{$admin1->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Yatima Inc.">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="{{$admin1->username}}" name="username">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email" value = "{{$admin1->email}}" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Full Name</label>
                      <input type="text" class="form-control" placeholder="Admin's Name" value="{{$admin1->name}}" name="name">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Role</label>
                      <input type="text" class="form-control" placeholder="who are you?" value="{{$admin1->usertype}}" name="role">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                      <input type="text" class="form-control" placeholder="Work Address" value="{{$admin1->address}}" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Phone</label>
                      <input type="text" class="form-control" placeholder="Mobile Number" value="{{$admin1->phone}}" name="phone">
                      </div>
                   
                    </div>
                  
                    {{-- <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                      <textarea rows="4" cols="80" class="form-control" placeholder="Explain yourself in 150 characters Max." value="{{$admin1->description}}" name="description"></textarea>
                      </div>
                    </div> --}}
                    <button class="btn btn-success btn-md" type="submit" name="update">Update</button>
                  </div>
                </form>
                @endforeach
              </div>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy
                  <br> Your chick she so thirsty
                  <br> I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
@endsection
