<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJW</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .chart-container {
          width: 50%;
          height: 50%;
          margin: auto;
        }
      </style>
      
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row align-items-center bg-primary">
                <div class="col-6">
                    <img src="path_to_your_image" alt="Logo" class="navbar-logo img-fluid">
                </div>
                <div class="col-6 text-end">
                    <h1 class="navbar-text">Judul Anda</h1>
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
                    <a class="nav-link mx-3 active" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" href="/event">Event</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="/e-data">E-Data</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link mx-3" href="/archive">Archive</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="container-fluid bg-">
        <div class="row mt-3">

          <div class="col-lg-6">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-5">
                      <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          <div class="col-lg-6">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

    </div>

    <footer class="footer-area section-padding mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                <div class="card chart-container">
                    <canvas id="chart"></canvas>
                  </div>
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
    
    <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>