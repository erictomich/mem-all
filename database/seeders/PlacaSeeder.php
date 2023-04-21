<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R1',
            'img' => 'R1.png',
            'nome' => 'Parada Obrigatória',
            'descricao' => 'Obriga o condutor a parar o veículo antes de entrar na via. É a única em formato octagonal.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R3',
            'img' => 'R3.png',
            'nome' => 'Sentido proibido',
            'descricao' => 'Assinala a proibição de se seguir em frente ou entrar na rua ou área em restrição.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R5B',
            'img' => 'R5B.png',
            'nome' => 'Proibido Retornar à Direita',
            'descricao' => 'Proibido retorno à direita.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R6A',
            'img' => 'R6A.png',
            'nome' => 'Proibido Estacionar',
            'descricao' => 'Determina ao condutor a proibição do estacionamento no trecho abrangido pela restrição.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R6A',
            'img' => 'R6A.png',
            'nome' => 'Proibido Estacionar',
            'descricao' => 'Determina ao condutor a proibição do estacionamento no trecho abrangido pela restrição.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R6B',
            'img' => 'R6B.png',
            'nome' => 'Estacionamento Regulamentado',
            'descricao' => 'Utilizado em locais que têm como regra geral a proibição.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R6C',
            'img' => 'R6C.png',
            'nome' => 'Proibido Parar e Estacionar',
            'descricao' => 'Proíbe o condutor parar, ainda que por pouco tempo, mesmo em operações de embarque e desembarque.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R10',
            'img' => 'R10.png',
            'nome' => 'Proibido Trânsito de Veículos Automotores',
            'descricao' => 'Proíbe a entrada ou passagem de qualquer veículo automotor na área ou via sinalizada.'
        ]);

        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R25C',
            'img' => 'R25C.png',
            'nome' => 'Siga em Frente ou à Esquerda',
            'descricao' => 'Permite o condutor os sentidos de circulação à esquerda ou em frente.'
        ]);

        
        DB::table('placas')->insert([
            'idTipoPlaca' => 1,
            'codigoIdentificador' => 'R28',
            'img' => 'R28.png',
            'nome' => 'Duplo Sentido de Circulação',
            'descricao' => 'Determina ao condutor que circulava por via de sentido único sua mudança para o regime de mão dupla.'
        ]);
    }
}
