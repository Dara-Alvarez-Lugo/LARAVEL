<?php

namespace Database\Seeders;

#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Dara',
            'lastname' => 'Alvarez',
            'email' => 'Dara@alu.uabcs.mx',
            'phone_number' => '6121551471',
        ]);

        DB::table('clients')->insert([
            'name' => 'Isaac',
            'lastname' => 'Prado',
            'email' => 'Isaac@alu.uabcs.mx',
            'phone_number' => '6121551472',
        ]);
    }
}
