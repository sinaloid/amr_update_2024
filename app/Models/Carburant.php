<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    use HasFactory;

    protected $fillable = [
        "destination",
        "distance_aller_retour",
        "distance_interne",
        "cout_au_km",
        "estimation_du_cout",
        "statut",
        "slug",
        "is_delete",
        "date_sortie",
        "date_retour",
        "observation",
        "user_id"
    ];
}
