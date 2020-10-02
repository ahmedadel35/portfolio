<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
