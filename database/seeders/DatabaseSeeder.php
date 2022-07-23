<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        User::create([
            'name' => 'Adi Setiawan',
            'email' => 'adi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Hilman rs',
            'email' => 'hilman@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis libero sequi! Fugit illum atque similique, qui necessitatibus aliquam velit!',
            'body'  => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, quis eveniet minima corrupti officia aut ex temporibus est quae eum maiores recusandae inventore a deserunt eius hic! Harum recusandae saepe dolorem animi nam! Rem quis sed modi sint cupiditate tempore culpa at vitae porro odit excepturi sequi quae quia molestias, sapiente quasi repellat,</p><p>animi ab impedit itaque nisi, quam assumenda eius? Eius modi asperiores ipsam laboriosam animi reprehenderit, consectetur atque quas vero nobis sint placeat illum cupiditate est eum unde rerum non magnam, deserunt perferendis fuga? Nulla, nisi veritatis.</p><p>Accusamus, quas aliquid id, odit eos a assumenda aliquam enim ipsum quam impedit officia? Odio officia eius odit quisquam quidem libero aspernatur impedit qui esse vero, labore architecto dignissimos alias! Animi doloremque, autem molestiae error ipsam ex laudantium doloribus quae dolor tempora accusamus unde sit voluptas sunt suscipit perferendis excepturi modi provident officia amet consequatur totam quod ea. Vero, dolorum repellendus.</p>',
            'category_id'  => 1,
            'user_id'  => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis libero sequi! Fugit illum atque similique, qui necessitatibus aliquam velit!',
            'body'  => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, quis eveniet minima corrupti officia aut ex temporibus est quae eum maiores recusandae inventore a deserunt eius hic! Harum recusandae saepe dolorem animi nam! Rem quis sed modi sint cupiditate tempore culpa at vitae porro odit excepturi sequi quae quia molestias, sapiente quasi repellat,</p><p>animi ab impedit itaque nisi, quam assumenda eius? Eius modi asperiores ipsam laboriosam animi reprehenderit, consectetur atque quas vero nobis sint placeat illum cupiditate est eum unde rerum non magnam, deserunt perferendis fuga? Nulla, nisi veritatis.</p><p>Accusamus, quas aliquid id, odit eos a assumenda aliquam enim ipsum quam impedit officia? Odio officia eius odit quisquam quidem libero aspernatur impedit qui esse vero, labore architecto dignissimos alias! Animi doloremque, autem molestiae error ipsam ex laudantium doloribus quae dolor tempora accusamus unde sit voluptas sunt suscipit perferendis excepturi modi provident officia amet consequatur totam quod ea. Vero, dolorum repellendus.</p>',
            'category_id'  => 1,
            'user_id'  => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis libero sequi! Fugit illum atque similique, qui necessitatibus aliquam velit!',
            'body'  => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, quis eveniet minima corrupti officia aut ex temporibus est quae eum maiores recusandae inventore a deserunt eius hic! Harum recusandae saepe dolorem animi nam! Rem quis sed modi sint cupiditate tempore culpa at vitae porro odit excepturi sequi quae quia molestias, sapiente quasi repellat,</p><p>animi ab impedit itaque nisi, quam assumenda eius? Eius modi asperiores ipsam laboriosam animi reprehenderit, consectetur atque quas vero nobis sint placeat illum cupiditate est eum unde rerum non magnam, deserunt perferendis fuga? Nulla, nisi veritatis.</p><p>Accusamus, quas aliquid id, odit eos a assumenda aliquam enim ipsum quam impedit officia? Odio officia eius odit quisquam quidem libero aspernatur impedit qui esse vero, labore architecto dignissimos alias! Animi doloremque, autem molestiae error ipsam ex laudantium doloribus quae dolor tempora accusamus unde sit voluptas sunt suscipit perferendis excepturi modi provident officia amet consequatur totam quod ea. Vero, dolorum repellendus.</p>',
            'category_id'  => 2,
            'user_id'  => 2
        ]);
    }
}
