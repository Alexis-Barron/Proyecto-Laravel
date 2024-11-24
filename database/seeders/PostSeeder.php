<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++){

            $c = Category::inRandomOrder()->first();

            Post::create(
            [
            'title' => "category" ,
            'slug' => "category",
            'content' => 'dcdnjcnsdjcjnsdncnsdncsndjcnsdcnjdncdjcndnsondcneonjonwjoncnwjoncowjdncjowdncowndjocnjdnndcjowdcwd',
            'description' => 'kdmcksmdckmskdmcskdmckmskdmcsd',
            'posted' => 'yes',
            'category_id' => $c->id
                        ]
            );
        }
    }
}
