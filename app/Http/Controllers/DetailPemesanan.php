<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\rate;
use App\Models\Admin2;

class DetailPemesanan extends Controller
{
    function detailpemesanan(){
        $title='Landing Page';
        $packages=Packages::all();
        $rates=rate::all();
        $admin=Admin2::all();

        return view('detailpemesanan', compact('title','packages','rates','admin'));
    }

    function order(){
        $admin=Admin2::all();
        return view('admin.booking', compact('admin'));
    }

    function detailorder(){
        $admin=Admin2::all();
        return view('admin.detailbooking', compact('admin'));
    }
}
