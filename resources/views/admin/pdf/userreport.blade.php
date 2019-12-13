<html>
<head>
  <meta charset="utf-8">
  <title>User Report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class = "container-fluid">
    <br>
    <br>
    <div class="row">
        <div class="col-md-4">
      <h1> Users </h1>
        </div>
      </div>
    <table border="1px">

      <tr>
        <th style="width: 20%;"><b>Id</b></th>
        <th style="width: 70%;"><b>Full Name</b></th>
        <th style="width: 60%;"><b>Email</b></th>
        <th style="width: 50%;"><b>Phone</b></th> 
        <th style="width: 40%;"><b>Address</b></th> 
        <th style="width: 50%;"><b>Username</b></th>
        <th style="width: 50%;"><b>Role</b></th>   
        <th style="width: 80%;"><b>Joined On</b></th>
      </tr>
      @foreach($show as $user)
      <tr>
        <td style="width: 20%;">
          {{$user->id}}
        </td>
        <td style="width: 60%;">
          {{$user->name}}
        </td>
        <td style="width: 60%;">
          {{$user->email}}
        </td>
        <td style="width: 50%;"> 
          {{$user->phone}}
        </td>
        <td style="width: 40%;">
          {{$user->address}}
        </td>
        <td style="width: 50%;">
          {{$user->username}}
        </td>
        <td style="width: 50%;">
          {{$user->usertype}}
        </td>
        <td style="width: 60%;">
          {{$user->created_at}}
        </td>
      </tr>
      @endforeach
    </table>
  </div></body></html>