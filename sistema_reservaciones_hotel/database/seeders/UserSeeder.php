<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Dara';
        // $user->lastname = 'Alvarez';
        $user->email = 'Dara@alu.uabcs.mx';
        $user->password = 'password';
        $user->save();

        $user = new User();
        $user->name = 'Edgar';
        // $user->lastname = 'Narvaez';
        $user->email = 'Edgar@alu.uabcs.mx';
        $user->password = 'password1';
        $user->save();
    }
}
