<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lots = [
            [
                'created_at' => Carbon::now(),
                'name' => 'DC Ply Mens 2016/2017 Snowboard',
                'description' => 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным
                 щелчком и четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд
                 отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер
                 позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется,
                 просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.',
                'img' => 'img/lot-1.jpg',
                'price' => 10999,
                'dt_end' => Carbon::now()->addDay(),
                'bet_step' => 1000,
                'user_id' => 2,
                'category_id' => 1
            ],
            [
                'created_at' => Carbon::now(),
                'name' => '2014 Rossignol District Snowboard',
                'description' => 'Легкий  сноуборд, готовый дать жару в любом парке, растопив снег мощным
                 щелчком и четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этот снаряд
                 отличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер
                 позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется,
                 просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.',
                'img' => 'img/lot-2.jpg',
                'price' => 15999,
                'dt_end' => Carbon::now()->addWeeks(2),
                'bet_step' => 1000,
                'user_id' => 1,
                'category_id' => 1
            ],
            [
                'created_at' => Carbon::now(),
                'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                'description' => 'Крепления просто бомба. берите.',
                'img' => 'img/lot-3.jpg',
                'price' => 8000,
                'dt_end' => Carbon::now()->addWeek(),
                'bet_step' => 500,
                'user_id' => 3,
                'category_id' => 2
            ],
            [
                'created_at' => Carbon::now(),
                'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                'description' => 'Ботинки просто бомба. берите.',
                'img' => 'img/lot-4.jpg',
                'price' => 11000,
                'dt_end' => Carbon::now()->addWeeks(3),
                'bet_step' => 500,
                'user_id' => 3,
                'category_id' => 3
            ],
            [
                'created_at' => Carbon::now(),
                'name' => 'Куртка для сноуборда DC Mutiny Charocal',
                'description' => 'Куртка просто бомба. берите.',
                'img' => 'img/lot-5.jpg',
                'price' => 11000,
                'dt_end' => Carbon::now()->addWeek(),
                'bet_step' => 500,
                'user_id' => 4,
                'category_id' => 4
            ],
            [
                'created_at' => Carbon::now(),
                'name' => 'Маска Oakley Canopy',
                'description' => 'Маска просто бомба. берите.',
                'img' => 'img/lot-6.jpg',
                'price' => 5500,
                'dt_end' => Carbon::now()->addWeek(),
                'bet_step' => 500,
                'user_id' => 1,
                'category_id' => 6
            ],
            [
                'created_at' => Carbon::now(),
                'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                'description' => 'Ботинки просто бомба. берите.',
                'img' => 'img/lot-4.jpg',
                'price' => 11000,
                'dt_end' => Carbon::now()->addWeek(),
                'bet_step' => 500,
                'user_id' => 4,
                'category_id' => 3
            ]
        ];
        DB::table('lots')->insert($lots);
    }
}
