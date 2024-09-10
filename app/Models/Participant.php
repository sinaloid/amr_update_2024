<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "lastname",
        "firstname",
        "gender",
        "tranche_age",
        "statut_residence",
        "handicap",
        "type_handicap",
        "group_minoritaire",
        "organisation",
        "fonction",
        "formation",
        "telephone",
        "whatsapp",
        "email",
        "code_participant",
        "region",
        "province",
        "commune",
        "village",
        "date",
        "slug",
        "description",
        "activite_id",
        "is_delete"
    ];
}
