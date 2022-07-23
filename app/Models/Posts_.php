<?php

namespace App\Models;

class Posts
{
    private static $blog_posts = [
        [
            "title" => "belajar laravel 8",
            "slug" => "belajar-laravel-8",
            "author" => "Adi Setiawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cum unde modi ullam illum. Nemo perspiciatis animi itaque vel distinctio perferendis alias ad! Animi minus asperiores dignissimos, sunt laborum quibusdam, quia repellat odit praesentium eum voluptatem nemo corrupti similique! Laborum minima est magnam dolore facilis incidunt debitis ad odit vel laudantium. Velit similique obcaecati illo tempore dicta, facilis fugit impedit ex voluptatibus ullam quos, illum aliquam, dolorem rerum fuga sapiente ducimus cupiditate! Saepe neque fuga recusandae nemo. Mollitia earum quisquam distinctio illum corporis, voluptate perspiciatis quidem in, illo placeat esse?"
        ],
        [
            "title" => "belajar laravel 8.2",
            "slug" => "belajar-laravel-8.2",
            "author" => "Sujadmio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cum unde modi ullam illum. Nemo perspiciatis animi itaque vel distinctio perferendis alias ad! Animi minus asperiores dignissimos, sunt laborum quibusdam, quia repellat odit praesentium eum voluptatem nemo corrupti similique! Laborum minima est magnam dolore facilis incidunt debitis ad odit vel laudantium. Velit similique obcaecati illo tempore dicta, facilis fugit impedit ex voluptatibus ullam quos, illum aliquam, dolorem rerum fuga sapiente ducimus cupiditate! Saepe neque fuga recusandae nemo. Mollitia earum quisquam distinctio illum corporis, voluptate perspiciatis quidem in, illo placeat esse?
            m. Velit similique obcaecati illo tempore dicta, facilis fugit impedit ex voluptatibus ullam quos, illum aliquam, dolorem rerum fuga sapiente ducimus cupiditate! Saepe neque fuga recusandae nemo. Mollitia earum quisquam distinctio illum corporis, voluptate perspiciatis quidem in, illo placeat esse?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
