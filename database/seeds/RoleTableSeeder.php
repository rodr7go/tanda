<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [ 'name' => 'admin', 'display_name' => 'Administrador' ],
            [ 'name' => 'client', 'display_name' => 'Cliente' ]
        ];
        DB::table('roles')->insert($roles);

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);

        for ($i = 2; $i < 8; $i++)
        {
            DB::table('role_user')->insert([
               'user_id' => $i,
                'role_id' => 2,
            ]);
        }

    }
}
