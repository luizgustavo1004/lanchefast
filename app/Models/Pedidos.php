<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'user_id',
        'data_pedido',
        'valor_total',
        'valor_com_desconto',
        'forma_pagamento',
        'status',
    ];
    
    public function cliente()
    {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' é a chave estrangeira
    }

   
    public function produtos()
    {
        return $this->belongsToMany(Produto::class)
            ->withPivot('quantidade', 'preco_unitario')
            ->withTimestamps();
    }
  
}
