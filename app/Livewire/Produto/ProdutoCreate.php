<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProdutoCreate extends Component
{
    use WithFileUploads;


    public $nome, $ingredientes, $valor, $imagem;

    public function store()
    {

       
        $imagemPath = $this->imagem?->store('produtos', 'public');

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath,
        ]);

        session()->flash('success', 'Produto criado com sucesso!');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
