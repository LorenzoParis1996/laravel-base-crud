<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            ['nome' =>'Leo', 'nome_specie' =>'Leone', 'eta' =>5, 'sesso' =>'M', 'habitat' =>'Savanna'],
            ['nome' =>'Luna', 'nome_specie' =>'Lupo', 'eta' =>4, 'sesso' =>'F', 'habitat' =>'Foresta'],
            ['nome' =>'Teddy', 'nome_specie' =>'Orso', 'eta' =>6, 'sesso' =>'M', 'habitat' =>'Montagna'],
            ['nome' =>'Nina', 'nome_specie' =>'Aquilegia', 'eta' =>3, 'sesso' =>'F', 'habitat' =>'Alpi'],
            ['nome' =>'Zara', 'nome_specie' =>'Zebra', 'eta' =>7, 'sesso' =>'F', 'habitat' =>'Pianura']
        ];

        foreach($animals as $animal) {
            $NewAnimal= new Animal();
            $NewAnimal-> nome = $animal['nome'];
            $NewAnimal-> nome_specie = $animal['nome_specie'];
            $NewAnimal-> eta = $animal['eta'];
            $NewAnimal-> sesso = $animal['sesso'];
            $NewAnimal-> habitat = $animal['habitat'];
            $NewAnimal-> save();
        }
    }
}