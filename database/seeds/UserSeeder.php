<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()
        ->each(function($user){
            factory(App\Post::class, rand(1,8))->create(
                [
                    'user_id' => $user->id
                ]
            )
            ->each(function($post){
                $tag_ids = range(1,8);
                shuffle($tag_ids);
                $assignments =  array_slice($tag_ids, 0, rand(0,8));
                foreach($assignments as $tag_id){
                    DB::table('post_tag')
                    ->insert([
                        'post_id' => $post->id,
                        'tag_id' => $tag_id,
                        'created_at' => Now(),
                        'updated_at' => Now()

                    ]);
                }
            });
        });
    }
}
