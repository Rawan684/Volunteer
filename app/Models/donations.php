<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donations extends Model
{
    use HasFactory;
    protected $fillable = ['email','phone','donationstype','posttitle','posttext','confirm'];
}