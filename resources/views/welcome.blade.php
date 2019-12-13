<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Changia</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/app.css">



</head>

<style>
  .image1{
    background: url('images/orphan6.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .campaign{
    height: 400px;
    align-self: center;
    object-fit: contain;
  }
  
</style>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: rgba(255,102, 0, 0.8)">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        {{-- <div><img src="/svg/changia.svg" style="height: 20px; border-right: 1px solid #333;" class="pr-3"></div> --}}
        <div class="pr-3" style=" border-right: 1px solid #333; ">Yatima</div>
      </a>
      {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Orphage Donation System</a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto nav nav-pills">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="#services">Fundraise Campaigns</a>
          </li>
          <li class="nav-item" style="border-right: 1px dotted #fff">
            <a class="nav-link js-scroll-trigger text-white" href="#contact">Contact</a>
          </li>
          @if (Route::has('login'))
          <li class="nav-item">
            @auth
            <a class="nav-link js-scroll-trigger text-white" href="{{ url('/home') }}">Home</a>
            @else
            <a class="nav-link js-scroll-trigger text-white" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            @if (Route::has('register'))
            <a class="nav-link js-scroll-trigger text-white btn btn-default" href="{{ route('register') }}">Join as Organization</a>
            @endif
            @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>


  <header class="image1">
    <div class="container text-center" style="padding:50px; background-color:rgba(0,0,0,0.7);">
      <h1><span style="color: #377880; font-size:100px">Welcome to</span></h1><h1><span style="color: #ff6600; font-size: 60px">Yatima</span></h1><br>
      <p class="lead" style="color:#fff">A &nbsp Convenient &nbsp fundraising &nbsp platform</p>
      <a href="/register" class="btn btn-outline-success btn-md">Start today</a>
      <!-- <p class="lead">"Every child deserve better life and children’s right regardless of any conditions they are. Through this platform, Home orphanage organization will be able to serve these children at the best and make sure they nurture to reach the potentials."</p> -->
    </div>
  </header>

  <div id="about" class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Care For Our Beloved Children</h1>
      <table>
        <tr>
          <td>
            <div style="height: 5px; width: 110px; background-color: #FF5733" ></div>
          </td>
          <td>
            <div style="height: 5px; width: 70px; background-color: #87C762; margin-left: 25px " ></div>
          </td>
          <td>
            <div style="height: 5px; width: 80px; background-color: #5A9D86; margin-left: 25px" ></div>
          </td>
          <td>
            <div style="height: 5px; width: 190px; background-color: #3A99AD; margin-left: 25px" ></div>
          </td>
          <td>
            <div style="height: 5px; width: 200px; background-color: #900C3F; margin-left: 25px" ></div>
          </td>
        </tr>
      </table>
      <p class="lead" style="padding-top: 20px">Changia is a platform that helps various children's home and other NGO's in fundraising. We want to make the whole process easier and convenient for both donor and receiver. And this is the only platform where Donor can donate straight to the receiver (NGO's) without charging them for the service cost. This is to make the fundraising more effective to the receiver while been honest to donors from all over the world.</p>
    </div>
  </div>

  <script>
    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i=0;i<4;i++) {
        next=next.next();
        if (!next.length) {
          next=$(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      }
    });
  </script>

  <div id="services" class="jumbotron">
    <div class="container">
      <h1 class="display-4">Latest Fundraise Campaigns</h1>
      <section class="team pt-5">
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
              class="fas fa-chevron-left"></i></a>
              <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
                class="fas fa-chevron-right"></i></a>
              </div>
              <!--/.Controls-->

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-multi" data-slide-to="1"></li>
                <li data-target="#carousel-example-multi" data-slide-to="2"></li>
                <li data-target="#carousel-example-multi" data-slide-to="3"></li>
                <li data-target="#carousel-example-multi" data-slide-to="4"></li>
                <li data-target="#carousel-example-multi" data-slide-to="5"></li>

                
              </ol>
              <!--/.Indicators-->

              <div class="carousel-inner v-2" role="listbox">
                @foreach($post as $posts)
                <div class="carousel-item @if($loop->first) active @endif">
                  <div class="col-xl-4 col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top" src="/storage/{{$posts->image}}"
                      alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$posts->caption}}</h4>
                        <p class="card-text">Targeted Amount: &nbsp {{$posts->amount}}</p>
                        <p class="card-text"><small class="text-muted">Posted on:&nbsp{{$posts->created_at}}</small></p>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>
                @endforeach
              </div>

            </div>
            {{-- https://cdn.pixabay.com/photo/2017/08/06/00/27/yoga-2587066_960_720.jpg --}}
            <div style="display: flex; justify-content: center; padding-top: 10px">
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{url('/campaignlist')}}" role="button">View More</a>
              </p></div>
            </div>
          </section>
        </div>
      </div>

      <div id="contact" class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Contacts</h1>
          <p class="lead">Reach Us over</p>
          <ul>
            <li>Phone: +254790921553</li>
            <li>Email: admdonate@gmail.com</li>
            <li>P.O.Box: 45 Usa-River</li>
          </ul>

          <p class="lead">Location</p>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
                  <div class="card-header ">
                    Google Maps
                  </div>
                  <div class="card-body ">
                    <style>
                      /* Set the size of the div element that contains the map */
                      #map {
                       height: 400px;  /* The height is 400 pixels */
                       width: 100%;  /* The width is the width of the web page */
                     }
                   </style>
                 </head>
                 <body>
                   <!--The div element for the map -->
                   <div id="map" class="map"></div>
                   <script>
           // Initialize and add the map
           function initMap() {
             // The location of Uluru
             var uluru = {lat: -1.314658, lng: 36.807090};
             // The map, centered at Uluru
             var map = new google.maps.Map(
               document.getElementById('map'), {zoom: 4, center: uluru});
             // The marker, positioned at Uluru
             var marker = new google.maps.Marker({position: uluru, map: map});
           }
         </script>
               <!--Load the API from the specified URL
               * The async attribute allows the browser to render the page while the API loads
               * The key parameter will contain your own API key (which is not needed for this tutorial)
               * The callback parameter executes the initMap() function
             -->
             <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6O3pKJnEyJG2a8crpR8rpMlK_y6I0ZmU&callback=initMap">
           </script>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>


<!-- Footer -->
<footer class="py-2 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Yatima Orphanage Donation System</p>
    <p class="m-0 text-center text-white">© <?php echo date("Y"); ?> Copyright.</p>
  </div>
  <!-- /.container -->
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<!-- Custom JavaScript for this theme -->


</body>

</html>

