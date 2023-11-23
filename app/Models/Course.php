<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoru;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        "title",
        "description",
        "duration",
        "cost",
        "img",
        "categoru_id",
    ];

    public function categorus()
    {
        return $this->hasMany(Categoru::class);
    }
}
