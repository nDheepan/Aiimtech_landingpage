<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Pages_route extends Controller
{


    public function home()
    {
        $path = resource_path('data/home.json');
        if (!File::exists($path)) {
            abort(404, 'File not found');
        }
        $json = File::get($path);
        $data = json_decode($json, true);
        return view('pages.home', ['data' => $data]);
    }

    // public function about_us()
    // {
    //     return view('pages.about_us');
    // }

    // public function consultants()
    // {
    //     return view('pages.consultants');
    // }

    // public function facilities()
    // {
    //     return view('pages.facilities');
    // }

    // public function our_services()
    // {
    //     return view('pages.our_services');
    // }

    // public function contact_us()
    // {
    //     return view('pages.contact_us');
    // }
}
