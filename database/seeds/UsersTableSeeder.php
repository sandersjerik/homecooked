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
            'name' => 'erik',
            'email' => 'gamefreakrox@aol.com',
            'password' => bcrypt('secret'),
            'isChef' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'example@example.com',
            'password' => bcrypt('secret'),
            'isCustomer' => true,
        ]);
    }
}
