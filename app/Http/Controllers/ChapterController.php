<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Log, Auth;
use App\CateCourse;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ChapterController extends Controller
{
    public function add_chapter(){
        return view('admin.chapter.add_chapter');
    }
}
