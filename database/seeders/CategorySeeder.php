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
               'name'=>'Все'
            ],
            [
                'name'=>'Доски и лыжи'
            ],
            [
                'name'=>'Крепления'
            ],
            [
                'name'=>'Ботинки'
            ],
            [
                'name'=>'Одежда'
            ],
            [
                'name'=>'Инструменты'
            ],
            [
                'name'=>'Разное'
            ],
            ];
        DB::table('categories')->insert($categories);
    }
}
