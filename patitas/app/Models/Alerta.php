<?php

namespace App\Models;

use App\Categoria;
use App\User;
use App\Comentario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    public $table = "alertas";
    public $guarded = [];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'alerta_id');
    }
}
