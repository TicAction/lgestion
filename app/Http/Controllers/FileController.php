<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function index()
    {
        $files = File::all();

        return view("files.index", compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        $files = $request->file("fullname");
        $fichier = new File();
        $fichier->titre = $request->get('title');
        $fichier->matiere = $request->get('matiere');
        $fichier->fullname = $files->getClientOriginalName();
        $fichier->save();
         $files->move('documents',$files->getClientOriginalName());
        Storage::disk('ftp')->put($files->getClientOriginalName().$file);
        return back();
    }


    public function destroy($id)
    {
        $file = File::find($id);
        Storage::disk('ftp')->delete('/' . $file->fullname);
        File::destroy($id);

        return redirect("admin/document");
    }
}
