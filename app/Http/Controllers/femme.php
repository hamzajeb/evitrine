<?php

namespace App\Http\Controllers;

use App\Models\escarpin;
use App\Models\sandale;
use Illuminate\Http\Request;

class femme extends Controller
{

    //escarpin
    public function index()
    {
        $escarpins = escarpin::latest()->paginate(4);
        return view("femme.escarpin")->with([
            'escarpins' => $escarpins,
        ]);
    }

    public function delete($id)
    {
        $escarpin = escarpin::find($id);
        if (file_exists(public_path('uploads') . '/' . $escarpin->image)) {
            // unlink(public_path('uploads') . '/' . $espadrille->image);
        }
        $escarpin->delete();
        return redirect()->route('show2')->with(['success' => 'article supprime']);
    }

    public function edit($id)
    {

        $escarpin = escarpin::find($id);
        return view('femme.escarpinEdit')->with([
            'escarpin' => $escarpin
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $escarpin = escarpin::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $escarpin->image = $image_name;
        }
        $escarpin->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $escarpin->image
        ]);
        return redirect()->route('show2')->with(['success' => 'card modifie']);
    }


    //sandale
    public function index2()
    {
        $sandales = sandale::latest()->paginate(4);
        return view("femme.sandale")->with([
            'sandales' => $sandales,
        ]);
    }

    public function delete2($id)
    {
        $sandale = sandale::find($id);
        if (file_exists(public_path('uploads') . '/' . $sandale->image)) {
            // unlink(public_path('uploads') . '/' . $espadrille->image);
        }
        $sandale->delete();
        return redirect()->route('show3')->with(['success' => 'article supprime']);
    }

    public function edit2($id)
    {

        $sandale = sandale::find($id);
        return view('femme.sandaleEdit')->with([
            'sandale' => $sandale
        ]);
    }

    public function update2(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $sandale = sandale::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $sandale->image = $image_name;
        }
        $sandale->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $sandale->image
        ]);
        return redirect()->route('show3')->with(['success' => 'card modifie']);
    }
}
