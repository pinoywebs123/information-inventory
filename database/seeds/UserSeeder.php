<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'role_id'			=> 1,
        	'first_name'		=> 'Morls',
        	'last_name'			=> 'Abu',
        	'dob'				=> now(),
        	'contact'			=> '09650918852',
        	'address'			=> 'Quezon City',
        	'email'				=> 'admin@gmail.com',
        	'password'			=> bcrypt('secret')
        ]);

        User::create([
            'role_id'           => 2,
            'first_name'        => 'Morls',
            'last_name'         => 'Abu',
            'dob'               => now(),
            'contact'           => '09650918852',
            'address'           => 'Quezon City',
            'email'             => 'user@gmail.com',
            'password'          => bcrypt('secret')
        ]);
    }
}
