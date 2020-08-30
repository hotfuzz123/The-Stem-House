<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Log;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class TeacherController extends Controller
{

    public function index(){
        return view('admin.teacher.teacher_login');
    }

    public function add_teacher(){
        //$this->Authlogin();
        return view('admin.teacher.add_teacher');
    }

    public function all_teacher(){
        //$this->Authlogin();
        return view('admin.teacher.all_teacher');
    }
}
