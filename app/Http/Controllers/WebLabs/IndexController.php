<?php

namespace App\Http\Controllers\WebLabs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('webLabs.index');
    }

    public function about()
    {
        return view('webLabs.about');
    }
    public function service()
    {
        return view('webLabs.service');
    }

    public function serviceDetails()
    {
        return view('webLabs.service-details');
    }

    public function project()
    {
        return view('webLabs.project');
    }

    public function contact()
    {
        return view('webLabs.contact');
    }
}
