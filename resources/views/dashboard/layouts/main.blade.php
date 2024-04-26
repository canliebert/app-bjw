<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }}</title>
  </head>
  <body>
  
    
    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
      </div>
      <div class="side-inner">

        <div class="profile">
          <img src="images/person_4.jpg" alt="Image" class="img-fluid">
          <h3 class="name">admin</h3>
          <span class="country">Web Designer</span>
        </div>

        
        <div class="nav-menu">
          <ul>
            <li class="accordion">
              <a href="/dashboard" class="collapsible">
                <span class="icon-home mr-3"></span>Home
              </a>
              
            </li>
            <li><a href="/dashboard/product"><span><i class="bi bi-cart4"></i></span>  Product</a></li>
            <li><a href="/"><span><i class="bi bi-credit-card-2-front"></i></span>   Front</a></li>  
            @can('admin')
            <li><a href="/dashboard/event"><span><i class="bi bi-calendar2-event mr-1"></i></span>  Event</a></li>
            <li><a href="/dashboard/news"><span><i class="bi bi-newspaper"></i></span>   News</a></li>
            <li><a href="/dashboard/umkm"><span><i class="bi bi-shop"></i></span>   UMKM</a></li>
            @endcan
            
            <li><form  action="/logout" method="POST" >@csrf
              <button style="border: none;
              background: none;
              color: inherit;
              text-decoration: none;
              cursor: pointer;
              padding: 0;
              margin-left: 2;"><span><i class="bi bi-box-arrow-right">    </i></span>    Sign out</button></form></li>
          </ul>
        </div>
      </div>
      
    </aside>
    <main>
      <div class="site-section">
        @if(session('success'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container">
          <div class="row justify-content-center">
            @yield('container')
          </div>
        </div>
      </div>  
    </main>
    
    

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  </body>
</html>