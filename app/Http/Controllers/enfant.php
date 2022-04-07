<?php

namespace App\Http\Controllers;

use App\Models\Bottine;
use App\Models\espadrilleEnfant;
use Illuminate\Http\Request;

class enfant extends Controller
{
    //bottine
    public function index()
    {
        $Bottines = Bottine::latest()->paginate(4);
        return view("enfant.bottine")->with([
            'bottines' => $Bottines,
        ]);
    }

    public function delete($id)
    {
        $bottine = Bottine::find($id);
        if (file_exists(public_path('uploads') . '/' . $bottine->image)) {
            // unlink(public_path('uploads') . '/' . $espadrille->image);
        }
        $bottine->delete();
        return redirect()->route('show4')->with(['success' => 'article supprime']);
    }

    public function edit($id)
    {

        $bottine = Bottine::find($id);
        return view('enfant.bottineEdit')->with([
            'bottine' => $bottine
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $bottine = Bottine::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $bottine->image = $image_name;
        }
        $bottine->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $bottine->image
        ]);
        return redirect()->route('show4')->with(['success' => 'card modifie']);
    }


    //espadrille
    public function index2()
    {
        $espadrilles = espadrilleEnfant::latest()->paginate(4);
        return view("enfant.espadrilleEnfant")->with([
            'espadrilles' => $espadrilles,
        ]);
    }

    public function delete2($id)
    {
        $espadrille = espadrilleEnfant::find($id);
        if (file_exists(public_path('uploads') . '/' . $espadrille->image)) {
            // unlink(public_path('uploads') . '/' . $espadrille->image);
        }
        $espadrille->delete();
        return redirect()->route('show5')->with(['success' => 'article supprime']);
    }

    public function edit2($id)
    {

        $espadrille = espadrilleEnfant::find($id);
        return view('enfant.espadrilleEnfantEdit')->with([
            'espadrille' => $espadrille
        ]);
    }

    public function update2(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $bottine = espadrilleEnfant::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $bottine->image = $image_name;
        }
        $bottine->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $bottine->image
        ]);
        return redirect()->route('show5')->with(['success' => 'card modifie']);
    }
}
