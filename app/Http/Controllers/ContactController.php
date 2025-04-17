<?php

namespace App\Http\Controllers;
use App\Models\Contacts;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery =  Contacts::orderby('id','desc')->get();
        return view('admin/contactview',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website/index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
      $row = new Contacts; 
      $row->name=$request->name; 
      $row->surname=$request->surname;
      $row->email=$request->email; 
      $row->websiteurl=$request->websiteurl;
 
      
      $row->save();
      $request->session()->flash('alert-success','Thank you');
     //  return back()->with('success','thank you for Contact'); 
     return redirect('contactview');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Contacts::where('id',$id)->first();
        if(is_null($gallery)) {
            return redirect()->back();
        } 
        $gallery->status='0';
        $gallery->save();
        return redirect('contactview');
    }
    public function contactdelete($id)
    {
       $gallery = Contacts::find($id); 
       $gallery->delete();
       return back();
        
   } 
}
