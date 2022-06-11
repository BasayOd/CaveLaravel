<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        $categories = [
            [
                'name'=>'Доски и лыжи',
                'style_name'=>'boards'
            ],
            [
                'name'=>'Крепления',
                'style_name'=>'attachment'
            ],
            [
                'name'=>'Ботинки',
                'style_name'=>'boots'
            ],
            [
                'name'=>'Одежда',
                'style_name'=>'clothing'
            ],
            [
                'name'=>'Инструменты',
                'style_name'=>'tools'
            ],
            [
                'name'=>'Разное',
                'style_name'=>'other'
            ],
            ];
        DB::table('categories')->insert($categories);
    }
}
