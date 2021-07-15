<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class studenttDemoData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('studentts')->Insert([
            'name' =>'Rahim',
            'roll'=>122,
            'phone_no'=>12345689,
        ]);
    }
} 
