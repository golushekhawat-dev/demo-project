<?php

namespace App\Http\Controllers;
use App\Models\Services;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery =  Services::orderby('id','desc')->get();
        return view('admin/serviceview',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/servicecreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $row = new Services; 
        $row->tittle=$request->tittle; 
        $row->discription=$request->discription;
   
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
       return redirect('serviceview');
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
        $gallery = Services::where('id', $id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        return view ('admin/serviceupdate',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Services::find($id); 
        if($request->hasfile('image'))
        { 
            $image =$request->file('image');
            $filename = time().''.$image->getClientOriginalName();
            $destinationPath = public_path('uploads/new/');
            $image->move($destinationPath,$filename);
            $gallery->image="uploads/new/".$filename;
         }  

        $gallery->tittle= $request->tittle; 
        $gallery->discription= $request->discription;  
       $gallery->status= $request->status; 
       $gallery->save();   
       // $request->session()->flash('alert-success');
       return redirect('serviceview'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Services::where('id',$id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        $gallery->status='0';
        $gallery->save();
        return redirect('serviceview');
    }
    public function servicedelete($id)
    {
       $gallery = Services::find($id); 
       $gallery->delete();
       return back();
        
   } 
}
