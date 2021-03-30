<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.pages.about.about');
    }

    public function course(){
        return view('frontend.pages.course.course');
    }

    public function shop(){
        return view('frontend.pages.shop.shop');
    }

    public function post(){
        return view('frontend.pages.post.post');
    }

    public function contact(){
        return view('frontend.pages.contact.contact');
    }
}
