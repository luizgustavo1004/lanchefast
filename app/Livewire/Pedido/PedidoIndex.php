<?php

namespace App\Livewire\Pedido;

use App\Models\Produto;
use Livewire\Component;

class PedidoIndex extends Component
{

    public function index()
{
    // Carregar todos os produtos paginados
    $produtos = Produto::paginate(10); // Paginando 10 produtos por página

    // Retornar a view passando os produtos
    return view('produtos.index', compact('produtos'));
}

    public function render()
    {
        return view('livewire.pedido.pedido-index');
    }
}
