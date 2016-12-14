<?php

namespace App\Http\Controllers;

use App\Kid;
use App\Observation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\ObservationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ObservationController extends Controller
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
        $observations = Observation::all();
        $observations->load('kid');
//        $observations = Observation::select(
//            DB::raw('DISTINCT(kid_id)'))->get();

            return view('observation.index',compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $observation = new Observation();

        $kid = Kid::orderBy('lastname','asc')->get()->pluck('Fullname','id');

        return view('observation.create',compact('observation','kid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObservationRequest $request)
    {
        $observation = new Observation();
        $observation->create($request->all());

        return redirect('admin/observation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $observation = Observation::findOrFail($id);
        $kids = Observation::where('kid_id',$observation->kid_id)->get();


        return view('observation.show',compact('observation','kids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Observation $observation)
    {
        $kid = Kid::orderBy('lastname','asc')->get()->pluck('Fullname','id');
        return view('observation.edit',compact('observation','kid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ObservationRequest $request, Observation $observation)
    {
        $req = $request->all();
        $observation->update($req);
        Session::flash('success', 'Les modifications sont faits');
        return redirect('admin/observation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Observation::destroy($id);

        Session::flash('success', "Cette observation à été effacer avec succès");
        return redirect('admin/observation');
    }
}
