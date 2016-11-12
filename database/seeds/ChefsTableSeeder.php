<?php

use Illuminate\Database\Seeder;

class ChefsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::where('email', 'gamefreakrox@aol.com')->first();

        $chef = new App\Chef();
        
        $user->chef()->save($chef);
    }
}
