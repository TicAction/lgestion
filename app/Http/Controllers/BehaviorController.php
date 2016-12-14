<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\Kid;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\BehaviorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BehaviorController extends Controller
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

        $behaviors = Behavior::select(
            DB::raw('DISTINCT(kid_id)'))->get();


        $behas = Behavior::all();

        foreach ($behas as $beha):


                if ($beha->kid_id == $beha->kids->id):
                    $beha->count();
                endif;



        endforeach;


        return view('behavior.index', compact('behaviors', 'behas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $comportement = new Behavior();
        $kids = Kid::find($id);
        return view('behavior.create', compact('comportement', 'kids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BehaviorRequest $request)
    {
        Behavior::create([
            'behave_date' => $request->get('behave_date'),
            'publish' => $request->get('publish'),
            'behavior' => $request->get('behavior'),
            'kid_id' => $request->get('kid_id'),
        ]);

        return redirect('admin/comportement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comportement = Behavior::findOrFail($id);
        return view('behavior.edit', compact('comportement'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BehaviorRequest $request, $id)
    {
        $behavior = Behavior::findOrFail($id);
        $req = $request->all($id);
        $behavior->update($req);
        Session::flash('success', 'Les modifications sont faits');
        return redirect('admin/comportement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Behavior::destroy($id);

        Session::flash('success', "Ce comportement à été effacer avec succès");
        return redirect('admin');
    }

    public function liste($id)
    {
        $kid = Kid::find($id);
        $behavior = Behavior::where('kid_id', $id)->get();
        $behavior->load('kids');

        return view('behavior.liste', compact('behavior', 'kid'));
    }
}
