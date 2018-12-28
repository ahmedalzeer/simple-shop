<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function c($c){
            \App\Country::create([
                'name' => $c
            ]);
        }
       c('iraq');
       c('jordan');
       c('libya');
       c('egypt');
       c('tunes');
    }
}
