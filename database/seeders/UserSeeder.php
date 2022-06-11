<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        $users = [
          [
              'name'=>'Игорь',
              'email'=>'basay1980@gmail.com',
              'password'=>'123',
              'avatar'=>'/img/avatar.jpg',
              'contact'=>'Червоный хутор'

          ],
            [
                'name'=>'Вася',
                'email'=>'basay1981@gmail.com',
                'password'=>'123',
                'avatar'=>'/img/avatar.jpg',
                'contact'=>'Княжеская'

            ],
            [
                'name'=>'Денис',
                'email'=>'basay1982@gmail.com',
                'password'=>'123',
                'avatar'=>'/img/avatar.jpg',
                'contact'=>'Базарная'

            ],
            [
                'name'=>'Паша',
                'email'=>'basay1983@gmail.com',
                'password'=>'123',
                'avatar'=>'/img/avatar.jpg',
                'contact'=>'Аркадия'

            ],
            [
                'name'=>'Коля',
                'email'=>'basay1984@gmail.com',
                'password'=>'123',
                'avatar'=>'/img/avatar.jpg',
                'contact'=>'Котовского'

            ],
        ];
        DB::table('users')->insert($users);
    }
}
