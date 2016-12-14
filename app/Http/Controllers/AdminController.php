<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\FormHomework;
use App\Homework;
use App\Kid;
use App\Observation;
use Illuminate\Http\Request;
use App\Admin;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $teachers = Admin::where('id', Auth::guard('admins')->user()->id)->get();
        $teachers->load('kids');


        return view('admin.index', compact("teachers"));
    }



}
