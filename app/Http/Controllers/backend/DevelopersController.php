<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Developers;

class DevelopersController extends Controller
{
    public function AllDevelopers()
    {
        $developers = Developers::latest()->get();
        return view('backend\developer\all_developers', compact('developers'));
    }

    public function AddDeveloper()
    {
        return view('backend\developer\add_developer');
    }

    public function StoreDeveloper(Request $request)
{
    $request->validate([
        'developer_name' => 'required',
        'developer_email' => 'required',
        'developer_tag' => 'required',
        'developer_phone' => 'required',
        'developer_category' => 'required',
        'developer_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'developer_price_services' => 'required',

    ]);

    // Téléchargez et stockez l'image dans le dossier public
    $imageName = time().'.'.$request->developer_image->extension();  
    $request->developer_image->move(public_path('logo/developer_images'), $imageName);

    Developers::create([
        'developer_image' => $imageName, // Enregistrez le nom du fichier dans la base de données
        'developer_name' => $request->developer_name,
        'developer_email' => $request->developer_email,
        'developer_tag' => $request->developer_tag,
        'developer_phone' => $request->developer_phone,
        'developer_category' => $request->developer_category,
        'developer_price_services' => $request->developer_price_services,

    ]);

    $notification = [
        'message' => 'Developeur ajouter avec succsess',
        'alert-type' => 'success'
    ];

    return redirect()->route('alldevelopers')->with($notification);
}
    public function EditDeveloper($id)
    {
        $developers = Developers::findOrFail($id);
        return view('backend\developer\edit_developer', compact('developers'));
    }

    public function UpdateDeveloper(Request $request)
{
    $request->validate([
        'developer_name' => 'required',
        'developer_email' => 'required',
        'developer_tag' => 'required',
        'developer_phone' => 'required',
        'developer_category' => 'required',
        'developer_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'developer_price_services' => 'required',

    ]);

    $developer = Developers::findOrFail($request->id);

    // Mettez à jour l'image seulement si une nouvelle image est téléchargée
    if ($request->hasFile('developer_image')) {
        // Téléchargez et stockez la nouvelle image
        $imageName = time().'.'.$request->developer_image->extension();  
        $request->developer_image->move(public_path('logo/developer_images'), $imageName);
        // Supprimez l'ancienne image du dossier public
        if ($developer->developer_image != 'no_image.jpg') {
            \File::delete(public_path('logo/developer_images/'.$developer->developer_image));
        }
        // Mettez à jour le nom de l'image dans la base de données
        $developer->developer_image = $imageName;
    }

    // Mettez à jour les autres champs
    $developer->developer_name = $request->developer_name;
    $developer->developer_email = $request->developer_email;
    $developer->developer_tag = $request->developer_tag;
    $developer->developer_phone = $request->developer_phone;
    $developer->developer_category = $request->developer_category;
    $developer->developer_price_services = $request->developer_price_services;


    $developer->save();

    $notification = array(
        'message' => 'Developeur modifier avec success',
        'alert-type' => 'success'
    );

    return redirect()->route('alldevelopers')->with($notification);
}

    public function DeleteDeveloper($id)
    {
        Developers::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Developeur supprimer avec success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
