<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "numero",
        "email",
        "naissance",
        "slug"
    ];
}
