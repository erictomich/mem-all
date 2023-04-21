<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPlacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Sinalização Vertical de Regulamentação',
            'slug' => 'sinalizacao-vertical-de-regulamentacao'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Placas de Informações Complementares de Regulamentação',
            'slug' => 'placas-informacoes-complementares-regulamentacao'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Sinalização Vertical de Advertência',
            'slug' => 'sinalizacao-vertical-advertencia'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Informações Complementares de Advertência',
            'slug' => 'informacoes-complementares-advertencia'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Placas Educativas',
            'slug' => 'placas-educativas'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Placas de Identificação',
            'slug' => 'placas-identificacao'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Placas de Serviços Auxiliares',
            'slug' => 'placas-servicos-auxiliares'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Pedestres e Deficientes Físicos',
            'slug' => 'pedestres-e-deficientes-fisicos'
        ]);
        DB::table('tipoPlaca')->insert([
            'tipoPlaca' => 'Placas de Atrativos Turísticos',
            'slug' => 'pedestres-e-deficientes-fisicos'
        ]);
    }
}
