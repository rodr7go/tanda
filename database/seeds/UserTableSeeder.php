<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Rodrigo',
            'last_name' => 'López',
            'phone' => '5517324531',
            'email' => 'rodrigo@controlmas.mx',
            'password' => bcrypt('rodrigo'),
        ]);
        
        for($i = 0; $i < 10; $i++)
        {
            $faker = Faker\Factory::create('es_ES');

            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
