<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesData = [
            ['name' => 'work'],
            ['name' => 'personal'],
            ['name' => 'others'],
        ];

        foreach ($categoriesData as $data) {
            Category::factory()->create($data);
        }
    }
}
