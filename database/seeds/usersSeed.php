<?php

use Illuminate\Database\Seeder;

class usersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $users = array([
            'name' => 'Martijn',
            'email' => 'vantongerenm@gmail.com',
            'password' => bcrypt('password'),
        ],
        [   'name' => 'Henk',
            'email' => 'vantongeren.m@gmail.com',
            'password' => bcrypt('password')]);

        DB::table('users')->insert($users);
    }
}
