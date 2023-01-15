<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Front-End ', 'Back-end', 'Full-Stack', 'UI-UX Design', 'Animations', 'Three.js'];
        foreach ($categories as $category) {
            $newcategory = new Category();

            $newcategory->name = $category;
            $newcategory->slug = Str::slug($newcategory->name, '-');

            $newcategory->save();
        }
    }
}