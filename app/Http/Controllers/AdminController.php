<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Services;
use App\Models\Abouts;
use App\Models\Gallerys;
use App\Models\Contacts;

class AdminController extends Controller
{
    public function dashboard(){
        $sliders  = Sliders::count();
        $services = Services::count();
        $about    = Abouts::count();
        $gallery =  Gallerys::count();
        $contact =  Contacts::count();
        
        return view('admin/index' , compact('sliders','services','about','gallery','contact'));
    }

    public function form(){
        return view('admin/forms-layouts');
    }
}
