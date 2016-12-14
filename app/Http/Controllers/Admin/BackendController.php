<?php

namespace App\Http\Controllers\Admin;

use App\Kid;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index()
    {
        $kids = Kid::orderBy('birthday', 'asc')->get();

        return view('admin.index',compact('kids'));
    }
}
