<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{

    public $clienteId;
    public $nome, $endereco, $telefone, $cpf, $email, $senha;

    public function mount($id)
    {
        $cliente = Cliente::findOrFail($id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
    }

    public function update()
    {
        $cliente = Cliente::findOrFail($this->clienteId);

        $cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha ? Hash::make($this->senha) : $cliente->senha,
        ]);

        session()->flash('success', 'Cliente atualizado com sucesso!');
    }
    
    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
