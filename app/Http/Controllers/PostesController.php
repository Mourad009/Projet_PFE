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
        'files' => 'required',
        
    ]);

    // Téléchargez et stockez l'image dans le dossier public
    $imageName = time() . '.' . $request->file('files')->extension();
    $request->file('files')->move(public_path('logo/postes_files'), $imageName);

    Postes::create([
        'files' => $imageName, // Enregistrez le nom du fichier dans la base de données
        'title' => $request->title,
        'body' => $request->body,
        
    ]);

    $notification = [
        'message' => 'Poste ajouter avec succsess',
        'alert-type' => 'success'
    ];

    return redirect()->route('allpostes')->with($notification);
}
    public function EditPoste($id)
    {
        $postes = Postes::findOrFail($id);
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

    $poste->save();

    $notification = [
        'message' => 'Poste modifié avec succès',
        'alert-type' => 'success'
    ];

    return redirect()->route('allpostes')->with($notification);
}

    public function DeletePoste($id)
    {
        Postes::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Poste supprimer avec success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    
}
