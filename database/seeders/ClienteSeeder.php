<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::Create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '19999999991',
            'cpf' => '192384192481',
            'email' => 'cliente@teste.com',
            'senha' => Hash::make('senha123')
        ]);

        Cliente::Create([
            'nome' => 'Cliente Exemplo2',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '19999999921',
            'cpf' => '192384192421',
            'email' => 'cliente@teste.com2',
            'senha' => Hash::make('senha123')
        ]);

        Cliente::Create([
            'nome' => 'Cliente Exemplo3',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '19999999942',
            'cpf' => '192384192402',
            'email' => 'cliente@teste.com3',
            'senha' => Hash::make('senha123')
        ]);
       
    }
}
