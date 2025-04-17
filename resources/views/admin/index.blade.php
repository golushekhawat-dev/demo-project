
@extends('admin.layouts.app')

@section('admin.content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card"> 
                <div class="card-body">
                  <h5 class="card-title">Slider</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                       <h6>{{ $sliders }}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card"> 
                <div class="card-body">
                  <h5 class="card-title">Service</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$services}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                

                <div class="card-body">
                  <h5 class="card-title">About</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$about}}</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
 
          </div>
          <div class="row">
           
             <div class="col-xxl-4 col-xl-12">

<div class="card info-card customers-card"> 
  <div class="card-body">
    <h5 class="card-title">Portfolio</h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-people"></i>
      </div>
      <div class="ps-3">
        <h6>{{$gallery}}</h6>

      </div>
    </div>

  </div>
</div>

</div>
 <!-- Customers Card -->
 <div class="col-xxl-4 col-xl-12">

<div class="card info-card customers-card">

  

  <div class="card-body">
    <h5 class="card-title">contact</h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-people"></i>
      </div>
      <div class="ps-3">
        <h6>{{$contact}}</h6>

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main><!-- End #main -->
  @endsection

  