<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Finn',
            'email' => 'finn@mail.com',
            'role' => 'eigenaar',
            'password' => Hash::make('test'),
            'woonplaats' => 'Hoofddorp',
            'adres' => 'Weg 31'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Danny',
            'email' => 'danny@mail.com',
            'role' => 'leerling',
            'password' => Hash::make('test'),
            'woonplaats' => 'Hoofddorp',
            'adres' => 'Weg 31'
        ]);

        \App\Models\agenda::factory()->create([
            'start_datum' => '2023-09-29 10:00',
            'eind_datum' => '2023-09-29 11:00',
            'lesdoel' => 'Springen',
            'soort' => 'Les'
        ]);

        \App\Models\paarden::factory()->create([
            'naam' => 'Roos',
            'geboortedatum' => '2018-09-29',
            'geslacht' => 'man',
            'tamheid' => 'tam'
        ]);
        
        \App\Models\AgendaUser::factory()->create([
            'agenda_id' => '1',
            'user_id' => '1'
        ]);

        \App\Models\Mededeling::factory()->create([
            'mededeling' => 'Dit is een test melding'
        ]);

        \App\Models\inschrijvingen::factory()->create([
            'naam' => 'Teun',
            'leeftijd' => '1999-04-01',
            'geslacht' => 'man',
            'adres' => 'amsterdam',
            'woonplaats' => 'jordaan 18',
            'email' => 'teun@gmail.com',
            'telefoonnummer' => '234242432424234',
            'lespakket' => 'pakket 1',
            'opmerking' => 'test'
        ]);
    }
}
