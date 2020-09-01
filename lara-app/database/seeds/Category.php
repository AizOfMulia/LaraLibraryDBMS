<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows=[
            ['categoryName'=>'Novel'],
            ['categoryName'=>'Information Technology'],
            ['categoryName'=>'Hobby'],
            ['categoryName'=>'Personal Development'],
            ['categoryName'=>'History'],
            ['categoryName'=>'Science'],
            ['categoryName'=>'Cooking'],
            ['categoryName'=>'Bussiness']
        ];


        foreach($rows as $row){
        DB::table('category')->insert($row);
        }
    }
}
