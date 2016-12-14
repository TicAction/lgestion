<?php

namespace App\Http\Controllers;

use App\FormHomework;
use App\Homework;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeworkController extends Controller
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
        $fdevoirs = FormHomework::where('admin_id', Auth::guard('admins')->user()->id)->orderBy('id','desc')->get();

        $devoirs = Homework::where('admin_id', Auth::guard('admins')->user()->id)->orderBy('id','desc')->get();
        return view('homework.index', compact('devoirs', 'fdevoirs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homework = new Homework();
        return view('homework.create', compact('homework'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HomeworkRequest $request)
    {
        $admin = Auth::guard('admins')->user()->id;

        $homework = new Homework();
        $homework->start = $request->get('start');
        $homework->end = $request->get('end');
        $homework->content = $request->get('content');
        $homework->admin_id = $admin;
        $homework->save();

        Session::flash('success', "La feuille de route a été enregistrée");
        return redirect('admin/devoir');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homework = Homework::findOrFail($id);
        return view('homework.show', compact('homework'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homework = Homework::findOrFail($id);
        return view('homework.edit', compact('homework'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\HomeworkRequest $request, $id)
    {
        $homework = Homework::findOrFail($id);
        $homework->update($request->all());
        return redirect(action('HomeworkController@index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Homework::destroy($id);
        Session::flash('erreur',"L'enregistrement a été effacé avec succès");
        return redirect('admin/devoir');
    }
}
