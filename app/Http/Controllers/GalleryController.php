<?php

namespace App\Http\Controllers;
use App\Models\Gallerys;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery =  Gallerys::orderby('id','desc')->simplepaginate(2);
        return view('admin/galleryview',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/gallerycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request);
      $row = new Gallerys; 
      $row->tittle=$request->tittle; 
   
 
      if($request->hasfile('image')){
          $image =$request->file('image');
          $filename = time().''.$image->getClientOriginalName();
          $destinationPath = public_path('uploads/new/');
          $image->move($destinationPath,$filename);
          $row->image="uploads/new/".$filename;
       }
      $row->save();
      $request->session()->flash('alert-success','Thank you');
     //  return back()->with('success','thank you for Contact'); 
     return redirect('galleryview');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallerys::where('id', $id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        return view ('admin/galleryupdate',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallerys::find($id); 
        if($request->hasfile('image'))
        { 
            $image =$request->file('image');
            $filename = time().''.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/new/');
            $image->move($destinationPath,$filename);
            $gallery->image="uploads/new/".$filename;
         }  

        $gallery->tittle= $request->tittle; 
       $gallery->status= $request->status; 
       $gallery->save();   
       // $request->session()->flash('alert-success');
       return redirect('galleryview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallerys::where('id',$id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        $gallery->status='0';
        $gallery->save();
        return redirect('galleryview');
    }
    public function gallerydelete($id)
    {
       $gallery = Gallerys::find($id); 
       $gallery->delete();
       return back();
        
   } 
}
