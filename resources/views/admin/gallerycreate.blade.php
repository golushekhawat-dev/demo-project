
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('gallerycreate')}}">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row d-flec justify-content-center">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Insert Form</h5>

          <!-- Horizontal Form -->
          
          <form method="POST" enctype="multipart/form-data" action="{{url('Gallerys')}}">
            @csrf
            <div class="row mb-3 p-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-8">
                <input type="file" class="form-control p-3 bg-light" id="inputPassword" name="image">
              </div>
            </div>  
              
            <div class="row mb-3 p-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Tittle</label>
              <div class="col-sm-8">
                <input type="text" class="form-control p-3 bg-light" id="inputPassword" name="tittle">
              </div>
            </div>  
            
            <div class="text-center mt-3">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>  
    </div> 
  </div>
</section>

</main><!-- End #main -->


@endsection