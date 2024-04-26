<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center bg-primary">
                <div class="col-6">
                    <img src="path_to_your_image" alt="Logo" class="navbar-logo img-fluid">
                </div>
                <div class="col-6 text-end" ">
                  <ul class="navbar-nav ms-auto">
                    @auth
                    
                        <li class="nav-item dropdown ml-auto">
                            <a class="nav-link dropdown-toggle" href="/categories" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome Back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-window-sidebar"></i> Dashboard</a></li>                             
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>                             
                                
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                             <a href="/login" class="text-decoration-none color-white"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li> 
                    @endauth
                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav h4">
                  <li class="nav-item">
                    <a class="nav-link mx-3 {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3 {{ Request::is('event*') ? 'active' : '' }}" href="/event">Event</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('e-data*') ? 'active' : '' }}" href="/e-data">E-Data</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link mx-3 {{ Request::is('oleh-oleh*') ? 'active' : '' }}" href="/oleh-oleh">UMKM</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link {{ Request::is('news*') ? 'active' : '' }}" href="/news">News</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    @yield('container')

    <footer class="footer-area section-padding mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>About Us</h6>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                  magna aliqua.
                </p>
              </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>Newsletter</h6>
                <p>Stay update with our latest</p>
                <div class="" id="mc_embed_signup">
    
                  <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                    method="get" class="form-inline">
    
                    <div class="d-flex flex-row">
    
                      <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                        required="" type="email">
    
    
                      <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                      <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>
    
                      <!-- <div class="col-lg-4 col-md-4">
                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                          </div>  -->
                    </div>
                    <div class="info"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Instragram Feed</h6>
                <ul class="instafeed d-flex flex-wrap">
                  <li><img src="img/instagram/i1.jpg" alt=""></li>
                  <li><img src="img/instagram/i2.jpg" alt=""></li>
                  <li><img src="img/instagram/i3.jpg" alt=""></li>
                  <li><img src="img/instagram/i4.jpg" alt=""></li>
                  <li><img src="img/instagram/i5.jpg" alt=""></li>
                  <li><img src="img/instagram/i6.jpg" alt=""></li>
                  <li><img src="img/instagram/i7.jpg" alt=""></li>
                  <li><img src="img/instagram/i8.jpg" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>Follow Us</h6>
                <p>Let us be social</p>
                <div class="footer-social d-flex align-items-center">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-dribbble"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-behance"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </footer>
      
      <script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>const ctx = document.getElementById('doughnut').getContext('2d');
      const doughnut = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      display: false
                  }
              }
          }
      });</script>
</body>
</html>