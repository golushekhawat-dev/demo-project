
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('servicecreate')}}">Home</a></li>
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
              <h5 class="card-title text-center">Update Form</h5>

              <!-- Horizontal Form -->
              <div style="color:red;">
              @if(session()->has('alert-success')){{session()->get('alert-success')}}
		@endif 
    </div>
              <form method="POST" enctype="multipart/form-data" action="{{url('serviceupdate')}}/{{$gallery->id}}">
                @csrf 
                <div class="row mb-3 p-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control p-3 bg-light" id="image" name="image" value="{{$gallery->image}}">
                    <img width="70px" height="50px" class="mt-3" src="{{ asset($gallery->image) }}" alt=""> 

                  </div> 
                </div> 
                @error('image')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

                <div class="row mb-3 p-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">tittle</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control p-3 bg-light" id="inputPassword" name="tittle" value="{{$gallery->tittle}}">
                  </div>
                </div>  
                @error('tittle')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

            <div class="row mb-3 p-3">
                  <label for="inputfile" class="col-sm-2 col-form-label">discription</label>
                  <div class="col-sm-8">
                    <input type="discription" class="form-control p-3 bg-light" id="inputfile" name="discription" value="{{$gallery->discription}}">
                     
                     
                  </div>
                </div> 
                @error('discription')
            {{$message}}
			<span class="alert-error"></span>
            @enderror
               
            <select name="status"> 
   @if($gallery->status == 1)
       <option value="1">Active</option>
       <option value="0">unactive</option>
   @else
       <option value="0">unactive</option>
       <option value="1">Active</option>
   @endif


</select>
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