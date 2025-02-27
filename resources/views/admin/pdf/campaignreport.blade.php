<html>
<head>
  <meta charset="utf-8">
  <title>Campaign Report</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class = "container">
    <br>
    <br>
    <div class="row">
        <div class="col-md-4">
      <h1>Campaigns</h1>
        </div>
      </div>
    <table class="table table-striped table-hover table-bordered">

      <tr>
        <th><b>Orgnization Name</b></th>
        <th><b>Campaign title</b></th>
        <th><b>Description</b></th> 
        <th><b>Duration</b></th> 
        <th><b>Targeted Amount</b></th>  
        <th><b>Created On</b></th>
      </tr>
      @foreach($show as $show)
      <tr>
        <td>
          
        </td>
        <td>
          {{$show->caption}}
        </td>
        <td>
          {{$show->description}}
        </td>
        <td>
          {{$show->duration}}
        </td>
        <td>
          {{$show->amount}}
        </td>
        <td>
          {{$show->created_at}}
        </td>
      </tr>
      @endforeach
    </table>
</body>
</html>