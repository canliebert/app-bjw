@extends('parts.layouts.main')
@section('container')
    <div class="container-fluid bg-">
      <div class="row">
        <div class="col-lg-4 text-center my-5">
            <img src="/image/admin.png" class="bd-placeholder-img rounded-circle" width="250" height="250" alt="">
            <h2 class="fw-normal">Kependudukan</h2>
            <p><a class="btn btn-secondary" href="/e-data/population">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center my-5">
            <img src="/image/image.png" class="bd-placeholder-img rounded" width="250" height="250" alt="">
            <h2 class="fw-normal">Galeri</h2>
            <p><a class="btn btn-secondary" href="/e-data/galery">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center my-5">
            <img src="/image/arsip.jpg" class="bd-placeholder-img rounded-circle" width="250" height="auto" alt="">
            <h2 class="fw-normal">Arsip</h2>
            <p><a class="btn btn-secondary" href="/e-data/archive">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    
    </div>
    <div class="m-3"></div>
@endsection
    