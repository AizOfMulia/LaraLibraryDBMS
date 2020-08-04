<?php

use Illuminate\Database\Seeder;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert([
            'role_name' =>  'user'
        ]);

        DB::table('user_role')->insert([
            'role_name' =>  'staff'
        ]);
    }
}
