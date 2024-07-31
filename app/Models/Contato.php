<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_do_contato',
        'mensagem',
    ];
}
