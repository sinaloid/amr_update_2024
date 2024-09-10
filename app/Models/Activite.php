<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
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
        "projet_id"
    ];

    public function participants () {
        return $this->hasMany(Participant::class);
    }
}
