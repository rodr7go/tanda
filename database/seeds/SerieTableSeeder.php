<?php

use Illuminate\Database\Seeder;

class SerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'name' => 'Tanda de prueba',
            'start_date' => '19/05/16',
            'ending_date' => '19/06/16',
//            'responsible' => 'Rodrigo',
            'week_number' => '10 semanas',
            'category' => 'Varios'
        ]);

        for($i = 0; $i < 10; $i++)
        {
            $faker = Faker\Factory::create('es_ES');

            DB::table('series')->insert([
                'name' => $faker->name,
                'start_date' => $faker->dateTime,
                'ending_date' => $faker->dateTime,
//                'responsible' => $faker->name,
                'week_number' => rand(10, 15) . ' ' . 'semanas',
                'category' => $faker->text
            ]);
        }
    }
}
