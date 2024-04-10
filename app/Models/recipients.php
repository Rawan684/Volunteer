<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipients extends Model
{
    use HasFactory;
    protected $fillable = ['email','phone','type','posttitle','posttext','confirm','image_1','image_2'];
}
