<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Factory(User::class, 15)->create();

        DB::table('users')->insert([
            'email'             => 'rie.miura@kidseed.co.jp',
            'email_verified_at' => now(),
            'password'          => '$2y$10$TKh8H1.PfQx37YgC7zwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'role'              => 0,
            'remember_token'    => str_random(10),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        DB::table('users')->insert([
            'email'             => 'yuki@gmail.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$TKh8H1.PfQx37YgC7zwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'role'              => 5,
            'remember_token'    => str_random(10),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        DB::table('users')->insert([
            'email'             => 'komatsu@gmail.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
            'role'              => 10,
            'remember_token'    => str_random(10),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

    }
}
