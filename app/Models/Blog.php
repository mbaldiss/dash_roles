<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // Luego de crear este modelo, protegemos los campos que tiene la table
    protected $fillable = ['titulo', 'contenido'];
}
