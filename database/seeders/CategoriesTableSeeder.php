<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create(['title' => 'Economia', 'token' => 'economia']);
        Category::factory()->create(['title' => 'Política', 'token' => 'politica']);
        Category::factory()->create(['title' => 'Policial', 'token' => 'policial']);
        Category::factory()->create(['title' => 'Entretenimento', 'token' => 'entretenimento']);
        Category::factory()->create(['title' => 'Mundo', 'token' => 'mundo']);
        Category::factory()->create(['title' => 'Tecnologia', 'token' => 'tecnologia']);
    }
}
