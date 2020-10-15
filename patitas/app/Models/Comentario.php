<?php

namespace App\Models;

use App\Alerta;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public $table = "comentarios";
    public $guarded = [];

    public function alertas()
    {
        return $this->belongsTo(Alerta::class, 'alerta_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

}
