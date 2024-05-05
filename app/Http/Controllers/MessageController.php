<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'message' => 'required|string',
        ]);

        // Envoyez l'email
        Mail::to('maurideveloper2@gmail.com')->send(new MessageReceived($request->message));

        // Redirigez l'utilisateur avec un message de succès
        return redirect()->back()->with('Le message a été envoyé avec succès.');
    }
}
