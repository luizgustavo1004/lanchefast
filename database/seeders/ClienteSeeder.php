<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
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
       $user = User::create([
    'name' => 'João Cliente',
    'email' => 'joao@email.com',
    'password' => bcrypt('123456')
]);

    Cliente::create([
    'user_id' => $user->id,
    'telefone' => '11999999999',
    'cpf' => '12345678900',
    'endereco' => 'Rua Exemplo, 123'
]);
       
    }
}
