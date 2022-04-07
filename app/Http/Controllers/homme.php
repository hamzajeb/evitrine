<?php

namespace App\Http\Controllers;


use App\Models\Bottine;
use App\Models\chaussureHomme;
use App\Models\escarpin;
use App\Models\espadrilleEnfant;
use App\Models\espadrilleHomme;
use App\Models\Panier;
use App\Models\sandale;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class homme extends Controller
{


    //ajouter pour tous les articles
    public function formAdd()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if ($request->category == "espadrillesHomme") {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            espadrilleHomme::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show')->with(['success' => 'article enregistre']);
        } else if ($request->category == "chaussuresHomme") {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            chaussureHomme::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show1')->with(['success' => 'article enregistre']);
        } else if ($request->category == "escarpinsFemme") {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            escarpin::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show2')->with(['success' => 'article enregistre']);
        } else if ($request->category == "sandalesFemme") {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            sandale::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show3')->with(['success' => 'article enregistre']);
        } else if ($request->category == "bottinesEnfant") {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            Bottine::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show4')->with(['success' => 'article enregistre']);
        } else {
            $this->validate($request, [
                'title' => 'required|min:3|max:100',
                'image' => 'required|mimes:png|max:2048'
            ]);
            if ($request->has('image')) {
                $file = $request->image;
                $image_name = 'photo_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $image_name);
            }
            espadrilleEnfant::create([
                'titre' => $request->title,
                'prix' => $request->prix,
                'description' => $request->description,
                'category' => $request->category,
                'image' => $image_name,

            ]);
            return redirect()->route('show5')->with(['success' => 'article enregistre']);
        }
    }

    public function chercherPanier($id_user, $titre)
    {
    }
    //panier
    public function ajouterPanier($titre, $prix, $image, $id_user)
    {

        Panier::create([
            'titre' => $titre,
            'prix' => $prix,
            'image' => $image,
            'quantite' => $_GET['quantite'],
            'id_user' => $id_user,



        ]);
        return redirect()->route('Panier', ['id_user' => $id_user]);
    }

    public function getPanier($id_user)
    {
        $produits = Panier::all()->where('id_user', $id_user);
        return view("Panier")
            ->with([
                'produits' => $produits,
            ]);
    }

    public function remove($id_panier)
    {
        $article = Panier::find($id_panier);
        if ($article != null) {
            $article->delete();
            $id_user = Auth::user()->id;
            return redirect()->route('Panier', ['id_user' => $id_user]);
        }
    }

    public function payer($id_user)
    {

        Panier::where('id_user', $id_user)->delete();
        return redirect()->route('first');
    }

    //espadrilles_homme
    public function index()
    {
        $espadrilles = espadrilleHomme::latest()->paginate(4);
        return view("homme.espadrilleHomme")->with([
            'espadrilles' => $espadrilles,
        ]);
    }


    public function delete($id)
    {
        $espadrille = espadrilleHomme::find($id);
        if (file_exists(public_path('uploads') . '/' . $espadrille->image)) {
            // unlink(public_path('uploads') . '/' . $espadrille->image);
        }
        $espadrille->delete();
        return redirect()->route('show')->with(['success' => 'article supprime']);
    }

    public function edit($id)
    {

        $espadrille = espadrilleHomme::find($id);
        return view('homme.editEspadrille')->with([
            'espadrille' => $espadrille
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $espadrille = espadrilleHomme::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $espadrille->image = $image_name;
        }
        $espadrille->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $espadrille->image
        ]);
        return redirect()->route('show')->with(['success' => 'card modifie']);
    }



    //chaussure homme
    public function index2()
    {
        $chaussures = chaussureHomme::latest()->paginate(4);
        return view("homme.chaussure")->with([
            'chaussures' => $chaussures,
        ]);
    }
    public function delete2($id)
    {
        $chaussure = chaussureHomme::find($id);
        if (file_exists(public_path('uploads') . '/' . $chaussure->image)) {
            // unlink(public_path('uploads') . '/' . $chaussure->image);
        }
        $chaussure->delete();
        return redirect()->route('show1')->with(['success' => 'article supprime']);
    }
    public function edit2($id)
    {

        $chaussure = chaussureHomme::find($id);
        return view('homme.editChaussures')->with([
            'chaussure' => $chaussure
        ]);
    }
    public function update2(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $chaussure = chaussureHomme::where('id', $id)->latest()->first();
        if ($request->has('image')) {
            $file = $request->image;
            $image_name = 'photo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            // unlink(public_path('uploads') . '/' . $post->image);
            $chaussure->image = $image_name;
        }
        $chaussure->update([
            'titre' => $request->title,
            'prix' => $request->prix,
            'description' => $request->description,
            'image' => $chaussure->image
        ]);
        return redirect()->route('show1')->with(['success' => 'card modifie']);
    }
}
