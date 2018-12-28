<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Category::create([
//            'category_name' => 'electronics'
//        ]);
//        \App\Category::create([
//            'category_name' => 'clothes'
//        ]);
//        \App\Category::create([
//            'category_name' => 'vichales'
//        ]);
//        \App\Category::create([
//            'category_name' => 'home stuff'
//        ]);
//        \App\Category::create([
//            'category_name' => 'sevices'
//        ]);

        \App\Category::create([
            'category_name' => 'الكترونيات'
        ]);
        \App\Category::create([
            'category_name' => 'ملابس'
        ]);
        \App\Category::create([
            'category_name' => 'مركبات'
        ]);
        \App\Category::create([
            'category_name' => 'اثاث'
        ]);
        \App\Category::create([
            'category_name' => 'خدمات اخري'
        ]);
        \App\Category::create([
            'category_name' => 'وظائف'
        ]);
    }
}
