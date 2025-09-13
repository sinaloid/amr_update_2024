<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "categorie",
        "date",
        "image",
        "description",
        "slug",
        "is_delete",
        "user_id",
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

}