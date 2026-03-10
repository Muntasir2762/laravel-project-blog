<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
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

    public function storeContactMessage (Request $request)
    {
        $message = new ContactMessage();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $message->save();

        toastr()->success('Message is sent successfully');
        return redirect()->back();
    }

    public function blogDetails ()
    {
        return view('frontend.blog-details');
    }
}
