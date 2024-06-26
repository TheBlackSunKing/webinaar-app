<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ReunionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reunions')->insert([
            'name' => "Discursos de desarrollo de AI",
            'description' => ('Nos encontramos en un momento crucial de la historia de la humanidad, donde los avances tecnológicos están transformando nuestro mundo a un ritmo acelerado. Uno de los campos que más impacto está generando es la Inteligencia Artificial (IA), la cual está revolucionando industrias, redefiniendo el trabajo y abriendo un sinfín de posibilidades para el futuro.
            \n
            En este seminario web, nos embarcaremos en un viaje fascinante para comprender el poder transformador de la IA. Exploraremos sus fundamentos, aplicaciones y el impacto que está teniendo en diversos sectores, desde la atención médica y la educación hasta el transporte y la manufactura.'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'estimate_time'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reunions')->insert([
            'name' => "Proyecto de pagina web",
            'description' => ('Desarrollar un proyecto web en grupo puede ser una experiencia enriquecedora y desafiante a la vez. Para lograr un resultado exitoso, es fundamental que los miembros del equipo colaboren de manera efectiva y comuniquen sus ideas de forma clara y convincente.
            \n
            En este seminario web, nos enfocaremos en la presentación de un proyecto web realizado en grupo. Abordaremos los retos y oportunidades únicos que surgen en este tipo de presentaciones, y le brindaremos estrategias para que su equipo brille ante la audiencia.'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'estimate_time'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
