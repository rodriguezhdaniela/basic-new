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
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Daniela Rodriguez H',
            'email' => 'dani-rodriguez-95@hotmail.com',
            'password' => bcrypt('12345678')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
