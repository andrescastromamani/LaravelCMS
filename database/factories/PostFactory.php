<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id'=>rand(1,30),
        'category_id'=>rand(1,20),
        'name'=>$title,
        'slug'=>Str::slug($title),
        'excerpt'=>$faker->text(500),
        'body'=>$faker->text(500),
        'file'=>$faker->imageUrl($width=1200, $height=400),
        'status'=>$faker->randomElement(['DRAFT','PUBLISHED']),
    ];
});
