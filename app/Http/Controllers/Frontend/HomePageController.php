<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index ()
    {
        return view('frontend.index');
    }

    public function aboutMe ()
    {
        return view('frontend.about-me');
    }

    public function contactMe ()
    {
        return view('frontend.contact-me');
    }

    public function blogDetails ()
    {
        return view('frontend.blog-details');
    }
}
