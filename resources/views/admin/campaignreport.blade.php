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
    <nav id="printbtn" class="navbar navbar-light bg-light fixed-top" style="background-color: rgba(255,102, 0, 0.8)">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/dashboard') }}">
          <div class="pr-3" style=" border-right: 1px solid #333; ">Yatima</div>
      </a>
        <form class="form-inline" method="POST" action="campaignreport">
          {{csrf_field()}}
          {{method_field('GET')}}
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
  <div style="padding-bottom:70px;"></div>
  <div class = "container">
      <div class="row">
          <div class=" col-sm-12 align-center" style=" padding-bottom: 6px;">
    <a href="/reports" id = "printbtn" class="btn btn-success btn-md">More Reports</a>
          </div>
        </div>
    <table class="table table-striped table-hover table-bordered">
      <h1>Campaigns Posted</h1>
      @if (session('status'))
				<div class="alert alert-danger" role="alert">
					{{ session('status') }}
				</div>
				@endif
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
          {{$show->name}}
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
    <br>
    <div class="row">
      <div class=" col-sm-12 align-center">
        <a href="/downloadcampaign" id="printbtn" class="btn btn-danger btn-md">Download PDF</a>
        <button id="printbtn" class="btn btn-danger btn-md" onclick="myFunction()">Print</button>
      </div>
    </div>
  </div>
  <br><br>
  <script>
    function myFunction() {
      window.print();
    }
  </script>
  <style type="text/css">
    @media print {
      #printbtn {
        display :  none;
      }
    }
  </style>
</body>
</html>