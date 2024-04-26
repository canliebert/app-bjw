@extends('parts.layouts.main')
@section('container')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" class="mt-3">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 32rem;">
          <div class="carousel-item active" style="height: 32rem;">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">              <image href="image/bupati.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />            
          </svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="height: 32rem;">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">              <image href="image/home.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />            </svg>
            svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="height: 32rem;">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <image href="image/vanili.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />            </svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        <div class="row my-3">
            <div class=" col-8 border-right overflow-auto bg-light" style="max-height: auto; overflow-y: 200px;">
              <div class="container rounded">
                
                <p class="m-2 justify-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum similique praesentium explicabo! Voluptatibus tempore omnis atque ipsam explicabo quasi exercitationem ut, laborum repellat eos fugiat possimus corrupti quis neque. Tenetur fugiat nulla tempora sequi incidunt itaque ducimus provident dolorem corporis quo, consequuntur beatae culpa nesciunt placeat eligendi illum sint maiores praesentium debitis vel dicta voluptatum facere. Earum nobis tenetur maiores rerum reprehenderit voluptates, consequatur aliquam alias voluptatum dolores eos sint odio repudiandae ex error, amet iste debitis? Ea, odit. Accusantium autem minus id animi facere molestiae similique labore. Excepturi perferendis suscipit ea sapiente illo perspiciatis, earum provident. Aspernatur quasi ipsam, quam placeat corporis tenetur autem esse pariatur a est explicabo nemo dolores et non voluptate, totam, nesciunt delectus dolorem quaerat quae consectetur error porro consequuntur. </p>
              </div>
              <div class="container">
                <div class="row">
                  @foreach ($event as $events)
                  <div class="col-lg-4 my-2">
                      <div class="card text-bg-dark">
                        <img src="{{ asset('storage/'.$events->img) }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h5 class="card-title">{{ $events->name }}</h5>
                        <p class="card-text">{{ $events->sub }}</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  @endforeach
                                
              </div>
              </div>
              
              
            </div>
            <div class="col-4 overflow-auto " style="max-height: auto; overflow-y: 400px;">
              <h2>Terbaru dari kami</h2>
              @foreach ($news as $news)
              <div class="col-12">
                
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                  <a class="text-decoration-none" href=""><h4 class="fst-italic">{{ $news->title }}</h4></a>
                  <img src="{{ asset('storage/'.$news->img) }}" alt="" class="rounded">
                  <p class="mb-0">{{ $news->subtitle }}</p>
                </div>
              </div>
              @endforeach
              
              
            </div>
        </div>
@endsection
      


    

