<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlaca extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoPlaca',
        'slug'
    ];
}
