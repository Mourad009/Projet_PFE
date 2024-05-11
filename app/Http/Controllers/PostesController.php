<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Developers;
use App\Models\Postes;

class PostesController extends Controller
{
    public function AllPostes()
    {
        $postes = Postes::latest()->get();
        return view('postes\all_postes', compact('postes'));
    }

    public function AddPoste()
    {
        return view('postes\add_poste');
    }

    public function StorePoste(Request $request)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
        'files' => 'required|mimes:jpg,jpeg,png,svg,webp',
        
    ]);

    // Téléchargez et stockez l'image dans le dossier public
    $imageName = time() . '.' . $request->file('files')->extension();
    $request->file('files')->move(public_path('logo/postes_files'), $imageName);

    $poste = new Postes();
    $poste->files = $imageName;
    $poste->title = $request->title;
    $poste->body = $request->body;
    $poste->link = $request->link;
    // Spécifiez l'ID de l'utilisateur connecté comme developer_id
    $poste->developer_id = Auth::id();
    $poste->save();

    $notification = [
        'message' => 'Poste ajouté avec succès',
        'alert-type' => 'success'
    ];

    return redirect()->route('allpostes')->with($notification);
}
    public function EditPoste($id)
    {
        $postes = Postes::findOrFail($id);
        // Vérifier si l'utilisateur connecté est l'auteur du poste
        if (Auth::id() != $postes->developer_id) {
            abort(403, 'action no autorisee.');
        }
        return view('postes\edit_poste', compact('postes'));
    }

    public function UpdatePoste(Request $request)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
        
    ]);

    $poste = Postes::findOrFail($request->id);

    // Mettez à jour l'image seulement si une nouvelle image est téléchargée
    if ($request->hasFile('files')) {
        $request->validate([
            'files' => 'required',
        ]);
        
        // Téléchargez et stockez la nouvelle image
        $imageName = time() . '.' . $request->file('files')->extension();
        $request->file('files')->move(public_path('logo/postes_files'), $imageName);
        // Supprimez l'ancienne image du dossier public
        if ($poste->files != 'no_image.jpg') {
            \File::delete(public_path('logo/postes_files/' . $poste->files));
        }
        // Mettez à jour le nom de l'image dans la base de données
        $poste->files = $imageName;
    }

    // Mettez à jour les autres champs
    $poste->title = $request->title;
    $poste->body = $request->body;
    $poste->link = $request->link;


    $poste->save();

    $notification = [
        'message' => 'Poste modifié avec succès',
        'alert-type' => 'success'
    ];

    return redirect()->route('allpostes')->with($notification);
}

    public function DeletePoste($id)
    {
        $poste = Postes::findOrFail($id);
        // Vérifier si l'utilisateur connecté est l'auteur du poste
        if (Auth::id() != $poste->developer_id) {
            abort(403, 'action no autorisee.');
        }
        $poste->delete();
        $notification = array(
            'message' => 'Poste supprimé avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    
}
