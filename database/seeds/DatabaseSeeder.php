<?php

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
        factory(App\Song::class, 50)->create();
        factory(App\History::class, 200)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
