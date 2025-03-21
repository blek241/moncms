<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Random\RandomException;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws RandomException
     */
    public function run()
    {
        $nbrCategories = 3;

        $this->createPost(1, 1);
        $this->createPost(2, random_int(1, $nbrCategories));
        $this->createPost(3, 1);
        $this->createPost(4, 1);
        $this->createPost(5, random_int(1, $nbrCategories));
        $this->createPost(6, 1);
        $this->createPost(7, 1);
        $this->createPost(8, random_int(1, $nbrCategories));
        $this->createPost(9, random_int(1, $nbrCategories));
    }

    /**
     * @throws RandomException
     */
    protected function createPost($id, $category_id)
    {
        $months = ['03', '03', '03', '04', '04', '06', '06', '06', '06'];

        $date = generateRandomDateInRange('2022-01-01', '2024-07-01');

        $postId = "Post {$id}";

        return Post::factory()->create([
            'title'       => $postId,
            'seo_title'   => $postId,
            'slug'        => Str::of($postId)->slug('-'),
            'user_id'     => random_int(1, 2),
            'image'       => '2024/' . $months[$id - 1] . '/img0' . $id . '.jpg',
            'category_id' => $category_id,
            'created_at'  => $date,
            'updated_at'  => $date,
            'pinned'      => 5 == $id,
        ]);
    }
}
