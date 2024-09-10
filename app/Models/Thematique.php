<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thematique extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "abreviation",
        "slug",
        "image",
        "description",
        "is_delete",
    ];
}
