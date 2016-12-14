<?php

namespace App\Http\Controllers;


use App\Group;
use App\Http\Requests\KidRequest;
use App\Kid;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KidController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('owner');
    }

    public function guardian()
    {
        $kids = Kid::all();
        $kids->load('users');
        return view('kid.guardian',compact('kids'));
    }

    public function code()
    {
        $kids = Kid::all()->sortBy('lastname');
        $kids->load('admins');
        return view('kid.code',compact('kids'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $groups = Group::where('admin_id',Auth::guard('admins')->user()->id)->get();

        $kids = Kid::orderBY('lastname','asc')->get();
        $gr = Group::where('admin_id',Auth::guard('admins')->user()->id)->lists('group_number','id');
           
        $kids->load('admins');
        $kid = new Kid();
        return view('kid.index', compact('kids', 'kid','gr','groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gr = Group::lists('group_number');

        $kid = new Kid();
        return view('kid.create', compact('kids', 'kid','gr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(KidRequest $request)
    {

        $admin = Auth::guard('admins')->user()->id;
        $kids = new Kid();
        $kids->firstname = ucfirst($request->get('firstname'));
        $kids->lastname = ucfirst($request->get('lastname'));
        $kids->birthday = $request->get('birthday');
        $kids->code = substr(uniqid(), -5);
        $kids->save();
            $group = $request->get('group');
        $kids->admins()->attach($admin,['gr'=>$group]);

        Session::flash('success', "Élève à été enregistrer avec success");
        return redirect('admin/enfant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kid = Kid::findOrFail($id);

        return view('kid.show', compact('kid', 'profils'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kids = Kid::all()->sortBy('lastname');
        $kids->load('admins');
        $kid = Kid::findOrFail($id);
        $gr = Group::lists('group_number');

        return view('kid.edit', compact('kid', 'kids','gr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(KidRequest $request, $id)
    {
        $kid = Kid::findOrFail($id);
        $kid->update($request->only('firstname', 'lastname', 'birthday'));

        Session::flash('success', 'Les modifications sont faits');
        return redirect(action('KidController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kid::destroy($id);
        Session::flash('erreur', "L'enregistrement a été effacé avec succes");
        return redirect('admin/enfant');
    }


}
