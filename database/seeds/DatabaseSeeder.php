<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'title' => Str::random(10),
            'description' => Str::random(1000),
            'content' => Str::random(10),
            'image' => Str::random(10).'.jpg',
        ]);
    }
}
