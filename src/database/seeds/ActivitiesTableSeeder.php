<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [
                "uuid" => 'f844011c-15b1-31af-a782-c4962494441b',
                "pub_state" => 0,
                "name" => 'プログラミングであそぼう',
                "detail" => 'プログラミングの入門をやります'
            ],
            [
                "uuid" => '7c979ff6-999d-3780-bc36-3081264fea65',
                "pub_state" => 0,
                "name" => 'HPを作成してみよう！',
                "detail" => 'ホームページ制作をしてみましょう！'
            ],
            [
                "uuid" => 'd63ff05c-75b7-3b34-8ae8-473a29e9ffa6',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => 'cce70020-3d83-11e9-9c68-63fea490a6a5',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => 'beec6e20-3d85-11e9-89f8-e51a6f0a0627',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => 'beecb5b0-3d85-11e9-9cfd-25f8c836b2e2',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => '4b27b190-3d86-11e9-b9e0-4f43629f0c6e',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => '4b2817c0-3d86-11e9-985a-c7fcbed0ca31',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
            [
                "uuid" => '4b287a60-3d86-11e9-94cc-3b15e6f96d27',
                "pub_state" => 0,
                "name" => 'デザイナーさんのデザイン思考を体験してみよう！',
                "detail" => 'デザイン思考を学ぶ！'
            ],
        ]);

        Factory(App\Models\Activity::class, 15)->create();
    }
}
