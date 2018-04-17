 <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav" style="font-size: 1.25rem;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size: 25px;">CESTINO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-color:black;">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
             <!-- <a class="btn icon-btn btn-default" href="#">Login</a> -->
                     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn icon-btn btn-default">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn icon-btn btn-default">Login</a>
                        <a href="{{ route('register') }}" class="btn icon-btn btn-default">Register</a>
                    @endauth
                </div>
            @endif

           
        </div>
    
            </li>
            <li class="nav-item">
              
              <!-- <a class="nav-link js-scroll-trigger" href="#about"></a> -->
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#download"></a> -->
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact"></a> -->
            </li>
          </ul>
        </div>
      </div>
    </nav>