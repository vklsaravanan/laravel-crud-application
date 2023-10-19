<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Record;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'saro@mypcot.com',
             'password' => Hash::make("password")
         ]);

        //creating categories
        $categoriesData = [
            ['name' => 'work'],
            ['name' => 'personal'],
            ['name' => 'others'],
        ];

        foreach ($categoriesData as $data) {
            Category::factory()->create($data);
        }

         //creating records
        Record::factory(10)->create();


    }
}
