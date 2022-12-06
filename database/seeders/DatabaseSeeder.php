<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'dedek iswan',
        //     'email' => 'dedek888@gmail.com',
        //     'password' => bcrypt('test1234'),
        // ]);

        // User::create([
        //     'name' => 'kira',
        //     'email' => 'kira12@gmail.com',
        //     'password' => bcrypt('testingkira1234'),
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Penetration Testing',
            'slug' => 'penetration-testing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eos maiores minus adipisci excepturi reiciendis voluptate, iure obcaecati quam labore nemo aut delectus nostrum amet exercitationem repellat quo cupiditate recusandae laboriosam ex, fugiat quod ipsam sapiente! Deserunt cum nobis, perferendis corporis, mollitia, quisquam velit maiores officia neque ipsa labore accusamus itaque esse inventore natus illum dolor voluptas. Deserunt quos provident inventore eligendi, culpa in fuga cum! Culpa assumenda tempora voluptas libero ratione voluptatem quia modi quas labore laboriosam distinctio aut, eveniet deleniti perferendis? Ducimus, a vero culpa incidunt quis, harum dolore, ea eum alias error sequi obcaecati. Autem, aperiam odit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eos maiores minus adipisci excepturi reiciendis voluptate, iure obcaecati quam labore nemo aut delectus nostrum amet exercitationem repellat quo cupiditate recusandae laboriosam ex, fugiat quod ipsam sapiente! Deserunt cum nobis, perferendis corporis, mollitia, quisquam velit maiores officia neque ipsa labore accusamus itaque esse inventore natus illum dolor voluptas. Deserunt quos provident inventore eligendi, culpa in fuga cum! Culpa assumenda tempora voluptas libero ratione voluptatem quia modi quas labore laboriosam distinctio aut, eveniet deleniti perferendis? Ducimus, a vero culpa incidunt quis, harum dolore, ea eum alias error sequi obcaecati. Autem, aperiam odit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eos maiores minus adipisci excepturi reiciendis voluptate, iure obcaecati quam labore nemo aut delectus nostrum amet exercitationem repellat quo cupiditate recusandae laboriosam ex, fugiat quod ipsam sapiente! Deserunt cum nobis, perferendis corporis, mollitia, quisquam velit maiores officia neque ipsa labore accusamus itaque esse inventore natus illum dolor voluptas. Deserunt quos provident inventore eligendi, culpa in fuga cum! Culpa assumenda tempora voluptas libero ratione voluptatem quia modi quas labore laboriosam distinctio aut, eveniet deleniti perferendis? Ducimus, a vero culpa incidunt quis, harum dolore, ea eum alias error sequi obcaecati. Autem, aperiam odit?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, nisi.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eos maiores minus adipisci excepturi reiciendis voluptate, iure obcaecati quam labore nemo aut delectus nostrum amet exercitationem repellat quo cupiditate recusandae laboriosam ex, fugiat quod ipsam sapiente! Deserunt cum nobis, perferendis corporis, mollitia, quisquam velit maiores officia neque ipsa labore accusamus itaque esse inventore natus illum dolor voluptas. Deserunt quos provident inventore eligendi, culpa in fuga cum! Culpa assumenda tempora voluptas libero ratione voluptatem quia modi quas labore laboriosam distinctio aut, eveniet deleniti perferendis? Ducimus, a vero culpa incidunt quis, harum dolore, ea eum alias error sequi obcaecati. Autem, aperiam odit?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
