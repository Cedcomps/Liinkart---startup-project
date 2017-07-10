<?php
 
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)
            ->create()
            ->each(function ($user) {
                $user->posts()->saveMany(factory(App\Post::class, rand(2, 5))->make());
            }
        );
 
        factory(App\Tag::class, 10)->create();
 
        $posts = App\Post::all();
 
        foreach ($posts as $post) {
            $numbers = range(1, 10);
            shuffle($numbers);
            $n = rand(2, 4);
            for($i = 0; $i < $n; ++$i) {
                $post->tags()->attach($numbers[$i]);
            }
        }
    }
}