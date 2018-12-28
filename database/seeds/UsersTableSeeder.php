<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       for ($i=0;$i<4;$i++)
       {
           \App\User::create([
               'name'      =>$faker->unique()->userName,
               'email'     =>$faker->unique()->email,
               'password'  =>bcrypt(123456),
               'role_id'   => rand(1,2)
           ]);
       }
       \App\User::create([
           'name'      =>'ahmed',
           'email'     =>'ahmed@a.com',
           'password'  =>bcrypt(123456),
           'role_id'   => 1
       ]);
    }
}
