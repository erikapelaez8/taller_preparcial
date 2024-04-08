<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_moto';

    protected $fillable = [
        'marca',
        'modelo',
        'cilindraje',
        'ano',
        'descripcion',
        'precio',
        'categoria',
        'color'
    ];
}