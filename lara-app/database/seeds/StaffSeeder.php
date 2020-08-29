<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'name'      =>  'AkmalAisy',
            'email'     =>  'akmal.rudy15@s.unikl.edu.my',
            'password'  =>  Hash::make('12345678')
        ]);
    }
}
