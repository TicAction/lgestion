<?php

namespace App\Http\Controllers;

use App\FormHomework;
use App\Homework;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FormHomeworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('owner');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fHomeworks = FormHomework::where('admin_id',Auth::guard('admins')->user()->id)->orderBy('start','asc')->get();
        return view('formhomework.index',compact('fHomeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fHomework = new FormHomework();
        $fhomes = FormHomework::all();
        return view('formhomework.create',compact('fHomework','fhomes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormHomeworkRequest $request)
    {
        $homework = new FormHomework();

        $homework->create($request->all());
        return redirect('admin/devoir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fHomework = FormHomework::findOrFail($id);
        return view('formhomework.show',compact('fHomework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fHomework = FormHomework::findOrFail($id);

        return view('formhomework.edit',compact('fHomework'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homework = FormHomework::findOrFail($id);
       $homework->update($request->all());
        return redirect('admin/devoir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormHomework::destroy($id);

        Session::flash('erreur',"L'enregistrement a été effacé avec succès");
        return redirect('admin/devoir');
    }
}
