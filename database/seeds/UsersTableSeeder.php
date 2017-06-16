<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mukesh',
            'email' => 'william.mukesh@ithands.biz',
            'password' => bcrypt('password'),
        ]);
    }
}
