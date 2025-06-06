<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Autorise l'enregistrement de ces champs
    protected $fillable = ['nom', 'email', 'message'];
}
