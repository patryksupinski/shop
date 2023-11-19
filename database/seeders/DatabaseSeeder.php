<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('testadmin'),    
        ]);

        Category::create(['name' => 'Farby']);
        Category::create(['name' => 'Kredki']);
        Category::create(['name' => 'Szkicowniki']);
        Category::create(['name' => 'Zestawy']);
        Category::create(['name' => 'Płótna malarskie']);
        Category::create(['name' => 'Akcesoria malarskie']);
        Category::create(['name' => 'Akcesoria rysownicze']);
    }
}
