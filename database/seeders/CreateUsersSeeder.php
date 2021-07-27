<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
                'level'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Petugas',
               'email'=>'petugas@itsolutionstuff.com',
               'level'=>'2',
               'password'=> bcrypt('123456'),
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
