<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class KontakSeeder extends Seeder
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
        $no = 1;
        for ($i=1; $i < 50; $i++) { 
            # code...
            DB::table('kontak')->insert([
                'nomor_telepon'=>$faker->phoneNumber,
                'email' => $faker->email,
                'siswa_id'=>$no++
            ]);
        }
    }
}
