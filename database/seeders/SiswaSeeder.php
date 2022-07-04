<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for ($i=1; $i <=50 ; $i++) { 
            # code...
            DB::table('siswa')->insert([
                'nama'=>$faker->name,
                'usia'=>$faker->numberBetween(13,18),
                'alamat'=>$faker->address

            ]);
        }
    }
}
