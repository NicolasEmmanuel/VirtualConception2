<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();
        $formations = Formation::factory(5)->create();
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create()->each(function($user) use ($categories,$formations ) {
            Blog::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id,
                'formation_id' => ($formations->random(1)->first())->id,
                

            ]);

        });
    }
}
