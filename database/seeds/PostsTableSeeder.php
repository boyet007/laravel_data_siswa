<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id        = 2;
        $post->title          = 'Pengalmaan memancing di danau Toba';
        $post->content        = 'Woa banget diinput secara manual';
        $post->slug           = 'pengalaman-memancing-didanau-toba';
        $post->save();

    }
}
