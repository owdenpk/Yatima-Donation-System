<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
        
    </style>
</head>
<body>
    
    <!------ Include the above in your HEAD tag ---------->
    
    <!-- slder sec -->
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: rgba(255,102, 0, 0.8)">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div><img src="/svg/changia.svg" style="height: 20px; border-right: 1px solid #333;" class="pr-3"></div>
                    <div class="pl-3">Yatima</div>
                </a>
                <ul class="nav navbar-nav ml-auto">
                </ul>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                
            </div>
        </div>
    </nav>
    <br><br><hr>
    <style type="text/css">
        
        .inner{
            overflow: hidden;
        }
        .inner img{
            transition: all 1.5s ease;
        }
        .inner:hover img{
            transform: scale(1.5);
        }
        
    </style>
    
    <div class="container">
        
        <div class="card-group">
            <div class="row col-lg-12">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-4" style="margin-bottom:20px">
                    <div class="card shadow" style="">
                        <div class="inner wrapper">
                            <img src="/storage/{{ $post->image }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$post->caption}}</h5>
                            <p class="card-text"><b>Targeted Amount:</b>&nbsp{{$post->amount}}</p>
                            <p class="card-text"><small class="text-muted">Posted on:&nbsp{{$post->created_at}}</small></p>
                            <a href="/post/{{ $post->id }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                
                
                @endforeach
            </div>
            
        </div><br>
    </div>
    <div style="padding-top: 40px"></div>
    <footer class="py-2 bg-dark fixed-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">Yatima Donation System</p>
            <p class="m-0 text-center text-white">© <?php echo date("Y"); ?> Copyright.</p>
        </div>
    </footer>
</body>
</html>