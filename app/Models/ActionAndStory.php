<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionAndStory extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "type",
        "slug",
        "image",
        "description",
        "is_delete",
    ];
}
