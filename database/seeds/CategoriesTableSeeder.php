<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->title = 'Java';
        $category->save();
        $category = new Category();
        $category->title = 'PHP';
        $category->save();
        $category = new Category();
        $category->title = 'JavaScript';
        $category->save();
        $category = new Category();
        $category->title = 'CSS';
        $category->save();
        $category = new Category();
        $category->title = 'HTML';
        $category->save();
    }
}
