<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // charge resources/views/home.blade.php
    }

    public function projets()
    {
        return view('projets', [
            'removeFooterBg' => true
        ]);
    }

    public function apropos()
    {
    return view('apropos');
    }

    public function contact()
    {
        return view('contact', [
            'removeFooterBg' => true
        ]);
    }

    public function envoyerMessage(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->only(['nom', 'email', 'message']));

        return back()->with('success', 'Message envoyé avec succès.');
    }
}