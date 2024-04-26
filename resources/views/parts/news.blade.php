@extends('parts.layouts.main')
@section('container')
    <div class="container-fluid bg-">
        <div class="row mt-3">
            <div class="col-lg-12" >
              <div class="card text-bg-dark">
                <img src="..." class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small>Last updated 3 mins ago</small></p>
                </div>
              </div>
              
              <div class="row my-3">
                <div class=" col-8 border-right overflow-auto bg-light" style="max-height: auto; overflow-y: 200px;">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 my-2">
                          <div class="card text-bg-dark">
                            <img src="image/ini.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay">
                            <h5 class="card-title">konioa</h5>
                            <p class="card-text">klma</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>  

                                    
                  </div>
                  </div>
                  
                  
                </div>
                <div class="col-4 overflow-auto " style="max-height: auto; overflow-y: 400px;">
                  <h2>Terbaru dari kami</h2>
                  <div class="col-12">
                    
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                      <a class="text-decoration-none" href=""><h4 class="fst-italic">ini budi</h4></a>
                      <img src="image/bazar.jpg" alt="" class="rounded">
                      <p class="mb-0">konoo</p>
                    </div>
                  </div>
                  
                  
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection