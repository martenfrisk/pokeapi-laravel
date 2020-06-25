<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon_name';
    public $timestamps = false;
    protected $fillable = [
        'name', 'base_experience', 'height', 'weight', 'is_default', 'sprites'
    ];
}
