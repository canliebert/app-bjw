@extends('parts.layouts.main')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-3">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Orders
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Customers
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-lg-8">
      <div class="">
        <canvas id="doughnut" width="400" height="400"></canvas>
      </div>
      
    </div>
    
</div>
</div>

@endsection