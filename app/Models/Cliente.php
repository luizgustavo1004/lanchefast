<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'endereco',
        'telefone',
        'cpf',
        'email',
        'senha'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

  

    
}

