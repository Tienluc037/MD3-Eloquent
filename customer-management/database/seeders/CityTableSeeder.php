<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $city = new City();
        $city->id = 2;
        $city->name = 'Hồ Chí Minh';
        $city->save();

        $city = new City();
        $city->id = 3;
        $city->name = 'Hải Phòng';
        $city->save();

        $city = new City();
        $city->id = 4;
        $city->name = 'Hải Dương';
        $city->save();
    }
}
