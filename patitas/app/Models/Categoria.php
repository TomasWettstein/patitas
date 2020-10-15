<?php

namespace App\Models;

use App\Alerta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $table = "categorias";
    public $guarded = [];

    public function alertas()
        {
            return $this->hasMany(Alerta::class, 'categoria_id');
        }
    
}
