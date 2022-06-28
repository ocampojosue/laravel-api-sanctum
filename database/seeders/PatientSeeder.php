<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'name' => 'Alex Oscar',
                'surname' => 'Gamarra Solis',
                'age' => 28,
                'sex' => 'Masculino',
                'ci' => 70218511,
                'type_blood' => 'A+',
                'phone' => 93124351,
                'email' => 'alex@gmail.com',
                'address' => 'Jr. Ramón Castilla 110'
            ],
            [
                'name' => 'María Perla',
                'surname' => 'Saruc Main',
                'age' => 34,
                'sex' => 'Femenino',
                'ci' => 80218522,
                'type_blood' => 'A-',
                'phone' => 95212435,
                'email' => 'maria@gmail.com',
                'address' => 'Jr. Manuel Ruíz 230'
            ],
            [
                'name' => 'Julio Ramón',
                'surname' => 'Quiroga Hasher',
                'age' => 52,
                'sex' => 'Masculino',
                'ci' => 23219913,
                'type_blood' => 'A+',
                'phone' => 97712331,
                'email' => 'julio@gmail.com',
                'address' => 'Jr. Enrique Palacios 202'
            ],
            [
                'name' => 'Mario Idalgo',
                'surname' => 'Cuerbo Nieto',
                'age' => 18,
                'sex' => 'Masculino',
                'ci' => 80218511,
                'type_blood' => 'B+',
                'phone' => 93212351,
                'email' => 'mario@gmail.com',
                'address' => 'Jr. Manuel Ruiz 800'
            ],
            [
                'name' => 'María Rosa',
                'surname' => 'Jara Uri',
                'age' => 40,
                'sex' => 'Femenino',
                'ci' => 62215777,
                'type_blood' => 'AB+',
                'phone' => 95174351,
                'email' => 'maría@gmail.com',
                'address' => 'Jr. Ramón Castilla 401'
            ],
            [
                'name' => 'Kevin Juan',
                'surname' => 'Rodriguez Ezquivel',
                'age' => 49,
                'sex' => 'Masculino',
                'ci' => 7821855,
                'type_blood' => 'A+',
                'phone' => 34994351,
                'email' => 'kevin@gmail.com',
                'address' => 'Jr. Alfonso Ugarte 2020'
            ],
            [
                'name' => 'Cielo Celeste',
                'surname' => 'Lázaro Peterson',
                'age' => 50,
                'sex' => 'Femenino',
                'ci' => 23888591,
                'type_blood' => 'A-',
                'phone' => 97161152,
                'email' => 'cielo@gmail.com',
                'address' => 'Jr. Francisco Bolognesi'
            ]
        ]);
    }
}

// {
//     "name": "Aderson Felix",
//     "surname": "Jara Lázaro",
//     "age": "26",
//     "sex": "Masculino",
//     "ci": "88991122",
//     "type_blood": "A+",
//     "phone": "946231232",
//     "email": "adersonjara15@gmail.com",
//     "address": "Jr. Ramón Castilla 1090"
// }
