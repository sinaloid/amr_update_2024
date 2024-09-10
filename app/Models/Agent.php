<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "post_occupe",
        'type',
        "slug",
        "image",
        "description",
        "is_delete",
    ];
}
