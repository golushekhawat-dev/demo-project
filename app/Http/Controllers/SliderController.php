<?php

namespace App\Http\Controllers;
use App\Models\Sliders;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery =  Sliders::orderby('id','desc')->get();
        return view('admin/sliderview',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/slidercreate');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    
        // dd($request);
         $row = new Sliders; 
         $row->tittle=$request->tittle; 
         $row->discription=$request->discription;
    
        
         $row->save();
         $request->session()->flash('alert-success','Thank you');
        //  return back()->with('success','thank you for Contact'); 
        return redirect('sliderview');
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
        $gallery = Sliders::where('id', $id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        return view ('admin/sliderupdate',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Sliders::find($id); 
       
         $gallery->tittle= $request->tittle; 
         $gallery->discription= $request->discription;  
        $gallery->status= $request->status; 
        $gallery->save();   
        // $request->session()->flash('alert-success');
        return redirect('sliderview'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Sliders::where('id',$id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        $gallery->status='0';
        $gallery->save();
        return redirect('sliderview');
    }
    public function sliderdelete($id)
    {
       $gallery = Sliders::find($id); 
       $gallery->delete();
       return back();
        
   } 
}
