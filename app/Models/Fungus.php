<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fungus extends Model
{
    use HasFactory;
    
    protected $table = 'fungi';
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Pileo',
        'Lamela',
        'Forma_del_pie'
    ];
}
