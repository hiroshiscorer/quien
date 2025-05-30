<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'imagen',
        'tema_id'
    ];
}
