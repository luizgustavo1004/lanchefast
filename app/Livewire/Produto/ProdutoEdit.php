<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProdutoEdit extends Component
{

    use WithFileUploads;

    public $produtoId;
    public $nome, $ingredientes, $valor, $imagem;
    public $novaImagem;

    public function mount($id)
    {
        $produto = Produto::findOrFail($id);
        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
    }

    public function atualizar()
    {
        $produto = Produto::findOrFail($this->produtoId);

        // Atualiza a imagem se foi trocada
        if ($this->novaImagem) {
            // Deleta imagem antiga se existir
            if ($produto->imagem && Storage::disk('public')->exists($produto->imagem)) {
                Storage::disk('public')->delete($produto->imagem);
            }

            $imagemPath = $this->novaImagem->store('produtos', 'public');
        } else {
            $imagemPath = $produto->imagem;
        }

        $produto->update([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath,
        ]);

        session()->flash('success', 'Produto atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
