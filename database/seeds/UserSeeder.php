<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Duilio Palacios',
        	'email' => 'duilio@styde.net',
        	'password' => bcrypt('laravel')
        ]);
        
    }
}
