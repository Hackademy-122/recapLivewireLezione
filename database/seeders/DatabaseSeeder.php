<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $genres=['Rock','Pop','Indie','Metal','Funk','Sanremo','Antonio'];

        foreach($genres as $genre){
            DB::table('genres')->insert([
                'name'=>$genre,
                // 'created_at'=>Carbon::now(),
                // 'updated_at'=>Carbon::now(),
            ]);
        }
        //Comandi:
        //php artisan migrate --seed
        //php artisan DB:seed
    }
}
