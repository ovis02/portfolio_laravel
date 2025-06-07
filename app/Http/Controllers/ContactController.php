<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Enregistrement
        Contact::create($validated);
    
        // Réponse JSON pour le JavaScript
        return response()->json([
            'message' => 'Message envoyé avec succès !',
        ]);
    }
    
}
