<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Categoru extends Model
{
  protected $fillable = [
    "id",
    "title"
  ];

  public function courses()
		{
			return $this->hasMany(Course::class);
		}
}
