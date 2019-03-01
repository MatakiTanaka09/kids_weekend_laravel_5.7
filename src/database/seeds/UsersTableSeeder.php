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
            'email' => 'yuki@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'email' => 'komatsu@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'remember_token' => str_random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Factory(App\User::class, 15)->create();
    }
}
