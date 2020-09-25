<?php

use App\Category;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    private Collection $cats;
    private array $postsBody = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        $this->cats = Category::all();
        $tags = Tag::all();
        $this->postsBody = include_once "posts_body_array.php";

        // $cats->each(function (Category $c) use ($tags) {
        //     $posts = factory(Post::class, random_int(10, 20))->create([
        //         'category_id' => $c->id
        //     ]);

        //     $posts->each(fn (Post $post) => $post->tags()->sync(
        //         Arr::random((array) $tags->pluck('id')->toArray(), 3)
        //     ));
        // });

        $this->createPost(
            'Laravel Tutorial Building Your First Laravel Application Part 1',
            1,
            [1, 2, 13]
        );

        $this->createPost(
            'Laravel Tutorial Building Your First Laravel Application Part 2',
            2,
            [1, 2, 13]
        );

        $this->createPost(
            'Laravel Tutorial Building Your First Laravel Application Part 3',
            3,
            [1, 2, 13]
        );

        $this->createPost(
            'Laravel Tutorial Building Your First Laravel Application Part 4',
            4,
            [1, 2, 13]
        );

        $this->createPost(
            'Laravel Tutorial Building Your First Laravel Application Part 5',
            5,
            [1, 2, 13]
        );



        DB::commit();
    }

    private function createPost(
        string $title,
        int $bodyInx,
        array $tags
    ): Post {
        $catId = $this->cats->first->id;
        $img = 'ZOTwZYhoNkFZCV5cLA1beqKHLI4MsD0w4BdpVUIa.png';
        $date = (Carbon::now()->subYear(1)->addDay($bodyInx))->format('d M Y');

        $attr = [
            'category_id' => $catId,
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->postsBody[$bodyInx - 1],
            'img' => $img,
            'user_id' => 1,
            'created_at' => $date,
            'updated_at' => $date 
        ];

        /** @var App\Post $post */
        $post = factory(Post::class)->create($attr);

        // TODO add tags to post
        $post->tags()->sync($tags);

        return $post;
    }
}
