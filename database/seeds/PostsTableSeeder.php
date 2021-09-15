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
        for($i = 0; $i < 10; $i++){
            
            $newPost = new Post();
            $newPost->title = 'Post identity ' . ($i + 101);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->content = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda eum blanditiis dolorem consectetur culpa incidunt quibusdam quo. Eveniet non laboriosam a dolore, quo iure alias architecto, repudiandae odio reiciendis quibusdam!';

            $newPost->save();
        }
    }
}
