<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "startDate",
        "endDate",
        "file",
        "slug",
        "is_delete",
        "description",
        "status",
        "user_id"
    ];

    public function activites () {
        return $this->hasMany(Activite::class);
    }
}
