<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::where('email', 'gamefreakrox@aol.com')->first();
        $chef = $user->chef;
        $data = [[
                'title' => 'Grandma\'s Lasagna',
                'description' => 'This is a delicious lasagna recipe that has been in my family for 4 generations.',
            ],[
                'title' => 'Chicken Noodle Soup',
                'description' => 'This is cooked with homemade broth and pasta.'
            ],[
                'title' => 'Steak Fajitas',
                'description' => 'A tasty party treat.'
            ]];
        foreach ($data as $meal)
        {
            $chef->meals()->create($meal);
        }
        factory(App\Meal::class, 3)->create([
            'chef_id' => $chef->id
        ]);
    }
}
