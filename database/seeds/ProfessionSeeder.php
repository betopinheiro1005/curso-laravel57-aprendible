<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {

        DB::table('professions')->insert([
        	'title' => 'Desenvolvedor back-end'
        ]);

        DB::table('professions')->insert([
        	'title' => 'Desenvolvedor front-end'
        ]);

        DB::table('professions')->insert([
        	'title' => 'Designer web'
        ]);

    }
}
