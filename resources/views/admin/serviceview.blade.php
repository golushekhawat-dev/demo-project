
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('servicecreate')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
      <div class="container-fluid mt-5">
         <div class="row">
            <div class="d-flex justify-content-center">
            <div class="col-lg-12">
               <div class="d-flex justify-content-end">
                  <a href="{{url('servicecreate')}}"><button class="btn btn-primary mx-2">Add Service</button></a>
 
                   
               </div>
               <table class="table table-bordered mt-3">
                  <thead>
                    
                     <tr class="text-center">
                        <th>ID</th> 
                        <th>Image</th> 
                        <th>Tittle</th> 
                        <th>Discription</th> 
                        <th>Status</th>   
                        <th colspan="3">Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                  @foreach($gallery as $g) 
                     <tr class="text-center">
                        <td>{{$loop->iteration}}</td> 
                        <td><img src="{{ asset($g->image) }}" width="50px"  alt="image"></td>  
                        <td>{{$g->tittle}}</td>
                        <td>{{$g->discription}}</td> 
                        <td> @if($g->status ==1)
                            <span style="color:green;">Active</span>
                            @else
                            <span style="color:red;">Unactive</span>
                            @endif</td>  
                            
                        <td><a  class="btn btn-success" href="{{url('serviceedit',$g->id)}}">Edit</a></td>
                        <td><a  class="btn btn-danger" href="{{url('servicedestroy',$g->id)}}">Delete</a></td>
                        <td><a  class="btn btn-danger" href="{{url('servicepdelete',$g->id)}}">Delete<b>(P)</b></a></td> 
                     </tr> 
                     @endforeach          
                  </tbody>
               </table>
            </div>
         </div>
         </div>
      </div>
</main>
@endsection