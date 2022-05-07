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

        //----------------------------------SECTION USER--------------------------------------------

        User::create([
            'name'=> 'Aurum Team',
            'username' => 'adminadmin',
            'email' => 'aurumteam@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '081233488755',
            'address'=> 'Jalan buntu belok kiri sedikit',
            'city'=>'Malang',
            'state'=>'Indonesia',
            'zip'=>'123456',
            'country'=>'Indonesia',
            'company'=> 'Universitas Negeri Malang',
            'avatar'=> 'contoh.jpg',
            'web'=>'1',
            'app'=>'',
            'about'=>'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);

        //--------------------------------SECTION CATEGORY---------------------------------

        Category::create([
            'title'=>'Sport',
            'cover'=>'/assets/picture/app/category/sport.png'
        ]);

        Category::create([
            'title'=>'Technology',
            'cover'=>'/assets/picture/app/category/technology.png'
        ]);

        Category::create([
            'title'=>'Business',
            'cover'=>'/assets/picture/app/category/business.png'
        ]);

        Category::create([
            'title'=>'Entertainment',
            'cover'=>'/assets/picture/app/category/entertainment.png'
        ]);

        Category::create([
            'title'=>'Health',
            'cover'=>'/assets/picture/app/category/health.png'
        ]);

        Category::create([
            'title'=>'Science',
            'cover'=>'/assets/picture/app/category/science.png'
        ]);

        Category::create([
            'title'=>'Transport',
            'cover'=>'/assets/picture/app/category/transport.png'
        ]);

        //-----------------------------SECTION POSTS-----------------------------------------------

        Post::create([
            'title'=>'Natural Vacation',
            'description'=>'For who interest to make a website with theme Travel, we provide this for you',
            'category_id'=>7,
            'user_id'=>1,
            'web-browser'=>1,
            'ios'=>1,
            'android'=>1,
            'chrome-os'=>1,
            'mac-os'=>'',
            'linux'=>'',
            'windows'=>'',
            'framework'=>'laravel',
            'file'=> 'contoh.jpg',
            'cover'=>'contoh.jpg',
            'price' => '2',
        ]);

    }
}
