<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Devices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();




        Devices::create([
            'title' => 'Microphone',
            'description' => 'The Neumann U 87 Ai is probably the best-known and most frequently used studio microphone the world over. Its smooth and refined sound is as iconic as its elegant exterior design. The U 87 Ai is the standard microphone for speech and vocals. Three polar patterns plus pad and low cut options make it adaptable to a wide range of applications.',
            'modelname' => 'U 87 Ai Studio Set',
            'brandname' => 'Neumann',
            'chars' => 'Acoustical operating principle - Pressure gradient transducer, Directional Pattern - Omnidirectional, cardioid, figure-8',
        ],
        );
        Devices::create([
            'title' => 'Acoustic Guitar',
            'description' => 'The single-cutaway FA-125CE combines Fender tone and style with our FE-A2 electronics for a guitar that was made to take the stage. Quality laminate construction with a modern Fender 3+3 headstock and Viking bridge create a great-sounding instrument that’s easy to play. Beginners and developing players will appreciate the nato neck that gives the guitar a lively tone and smooth, easy playing feel.',
            'modelname' => 'FA-125CE Dreadnought',
            'brandname' => 'Fender',
            'chars' => 'All-laminate construction, Modern 3+3 headstock, Viking bridge, Nato set-neck',
        ]
        );
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
