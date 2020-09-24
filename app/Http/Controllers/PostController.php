<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PostController extends Controller
{
    

    public function details_post(){
        return view('pages.post.post_details');
    }
}
