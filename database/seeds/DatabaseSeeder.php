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
            'title' => Str::random(4),
            'description' => Str::random(4),
            'content' => Str::random(4),
            'image' => Str::random(4).'.jpg',
        ]);
    }
}
