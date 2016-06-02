<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = \App\Serie::lists('id');

        DB::table('orders')->insert([
            'product' => 'tenis nike',
            'page' => '125',
            'model' => 'model',
            'id_product' => '158715',
            'numb_size' => '#8',
            'store_cost' => '1000',
            'client_cost' => '2500',
            'weekly_amount' => '250',
            'serie_id' => $series->random()
        ]);


        for($i = 0; $i < 10; $i++)
        {
            $faker = \Faker\Factory::create('es_ES');

            DB::table('orders')->insert([
                'product' => $faker->name,
                'page' => $faker->name,
                'model' => $faker->name,
                'id_product' => $faker->name,
                'numb_size' => $faker->name,
                'store_cost' => $faker->name,
                'client_cost' => $faker->name,
                'weekly_amount' => $faker->name,
                'serie_id' => $series->random()
            ]);
        }

    }
}
