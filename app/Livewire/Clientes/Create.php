<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    public function create()
    {
       

        $user = User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->senha),
        ]);
        
        Cliente::create([
            'user_id' => $user->id,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'endereco' => $this->endereco,
        ]);

        
        session()->flash('success', 'Cliente criado com sucesso!');
    }


    public function render()
    {
        return view('livewire.clientes.create');
    }
}
