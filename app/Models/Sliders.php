<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;
    protected $guarded=[];

    CONST types= ['home','page1Header','page1Title','page1body','page1footter',
    'page2Title','page2Header','page2body','page2footter'];
}
