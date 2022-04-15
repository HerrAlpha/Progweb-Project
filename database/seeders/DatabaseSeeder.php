<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'Aurum Team',
            'username' => 'adminadmin',
            'email' => 'aurumteam@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '081233488755',
            'address'=> 'Jalan buntu',
            'city'=>'Malang',
            'state'=>'hooh',
            'zip'=>'124',
            'country'=>'Indonesia',
            'company'=> 'Universitas Negeri Malang',
            'avatar'=> '',
            'web'=>'',
            'app'=>'',
            'about'=>'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);

        Category::create([
            'title'=>'Sport',
            'cover'=>'/assets/picture/app/category/sport.png',
        ]);

        Category::create([
            'title'=>'Technology',
            'cover'=>'/assets/picture/app/category/technology.png',
        ]);

        Category::create([
            'title'=>'Business',
            'cover'=>'/assets/picture/app/category/business.png',
        ]);

        Category::create([
            'title'=>'Entertainment',
            'cover'=>'/assets/picture/app/category/entertainment.png',
        ]);

        Category::create([
            'title'=>'Health',
            'cover'=>'/assets/picture/app/category/health.png',
        ]);

        Category::create([
            'title'=>'Science',
            'cover'=>'/assets/picture/app/category/science.png',
        ]);

        Category::create([
            'title'=>'Transport',
            'cover'=>'/assets/picture/app/category/transport.png',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>1,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Healt Template Jantung',
            'description'=>'Template ini mengandung Jantung',
            'category'=>5,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>4,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>2,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);


        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>3,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>7,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>1,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);

        Post::create([
            'title'=>'Sport Template Ronaldo',
            'description'=>'Template ini mengandung bawang',
            'category'=>1,
            'file'=> 'urlFile',
            'cover'=>'urlCover',
            'price' => '2',
        ]);
    }
}
