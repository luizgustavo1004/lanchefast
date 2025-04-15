<?php

namespace App\Livewire\Pedido;

use App\Models\Cliente;
use App\Models\Pedidos;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PedidoCreate extends Component
{


    public $produtos = [];
    public $produtosPedido = [];
    public $valor_total = 0;

    public function mount()
    {
        $this->produtos = Produto::all(); // Carregar produtos do banco de dados
        $this->addProduto(); // Inicia com 1 produto
    }

    public function addProduto()
    {
        $this->produtosPedido[] = ['produto_id' => '', 'quantidade' => 1];
    }

    public function removeProduto($index)
    {
        unset($this->produtosPedido[$index]);
        $this->produtosPedido = array_values($this->produtosPedido);
        $this->calcularTotal();
    }

    public function updatedProdutosPedido()
    {
        $this->calcularTotal();
    }

    public function calcularTotal()
    {
        $this->valor_total = 0;

        foreach ($this->produtosPedido as $item) {
            if (!empty($item['produto_id']) && !empty($item['quantidade'])) {
                $produto = Produto::find($item['produto_id']);
                if ($produto) {
                    $this->valor_total += $produto->valor * $item['quantidade'];
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.pedido.pedido-create');
    }

}
