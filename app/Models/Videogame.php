<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    //Trait
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id';

    //Mass Assignment
    protected $fillable = [
        'name',
        'genre',
        'release_date',
        'description',
        'rating',
        'price',
        'is_multiplayer',
        'platform'
    ];
}
