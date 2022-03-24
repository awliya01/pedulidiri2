<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('perjalanans')->insert([
                'tanggal' => $faker->date(),
                'jam' => $faker->time(),
                'lokasi' => $faker->street,
                'suhu_tubuh' => $faker->numberBetween(30, 40),
                'id_user' => $faker->numberBetween(2, 10)
            ]);
        }
    }
}
