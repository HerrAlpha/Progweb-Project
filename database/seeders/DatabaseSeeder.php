<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Admin;

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
        //----------------------------------FACTORY--------------------------------------------
        // Post::factory()
        // ->count(30)
        // ->hasUsers(1)
        // ->create();

        //----------------------------------SECTION USER--------------------------------------------

        User::create([
            'name' => 'Melissa J Tracy',
            'username' => 'melissa',
            'email' => 'melisT@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '212-608-4689',
            'address' => '3701 Wurm Rd Wolverine, Michigan(MI), 49799',
            'city' => 'Michigan',
            'state' => 'Indiana',
            'zip' => '47231',
            'country' => 'United States',
            'company' => 'Road Runner Lawn Services',
            'avatar' => 'avatar/seed1.jpg',
            'web' => '1',
            'app' => '',
            'about' => 'Pengen Nafas Manual'
        ]);

        User::create([
            'name' => 'Aurum Team',
            'username' => 'adminadmin',
            'email' => 'aherr249@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '260-316-6573',
            'address' => 'Jalan Semarang 5 Malang Kec. Lowokwaru - Kota Malang - Prov. Jawa Timur',
            'city' => 'Malang',
            'state' => 'East Java',
            'zip' => '65145',
            'country' => 'Indonesia',
            'company' => 'Universitas Negeri Malang',
            'avatar' => 'avatar/seed2.jpg',
            'web' => '',
            'app' => '1',
            'about' => 'Full SenyUM'
        ]);

        User::create([
            'name' => 'Carol K Rochelle',
            'username' => 'carol',
            'email' => 'carolRoc@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '508-230-9846',
            'address' => '4281 Stadium Drive',
            'city' => 'Easton',
            'state' => 'Massachusetts',
            'zip' => '02334',
            'country' => 'United States',
            'company' => 'VitaGrey',
            'avatar' => 'avatar/seed3.jpg',
            'web' => '1',
            'app' => '',
            'about' => 'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);


        User::create([
            'name' => 'Lauren R Williams',
            'username' => 'lauren',
            'email' => 'laurenrr@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '270-828-9431',
            'address' => '1192 Crosswind Drive',
            'city' => 'North Garrett',
            'state' => 'Kentucky',
            'zip' => '123456',
            'country' => 'United States',
            'company' => 'Thorofare',
            'avatar' => 'avatar/seed4.jpg',
            'web' => '1',
            'app' => '',
            'about' => 'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);

        User::create([
            'name' => 'Thelma J Mendoza',
            'username' => 'thelma',
            'email' => 'thelmajme@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '956-202-2896',
            'address' => '2183 Jerome Avenue',
            'city' => 'Dallas',
            'state' => 'Texas',
            'zip' => '75252',
            'country' => 'United States',
            'company' => 'Universitas Negeri Malang',
            'avatar' => 'avatar/seed5.jpg',
            'web' => '1',
            'app' => '',
            'about' => 'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);

        User::create([
            'name' => 'M Baharuddin Yusuf',
            'username' => 'nguyab',
            'email' => 'muhammadbaharuddin08123@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '956-202-2896',
            'address' => '2183 Jerome Avenue',
            'city' => 'Dallas',
            'state' => 'Texas',
            'zip' => '75252',
            'country' => 'United States',
            'company' => 'Universitas Negeri Malang',
            'avatar' => 'avatar/seed5.jpg',
            'web' => '1',
            'app' => '',
            'about' => 'Warning: PowerShell detected that you might be using a screen reader and has disabled PSReadLine for compatibility purposes. If you want to re-enable it, run Import-Module PSReadLine'
        ]);
        User::create([
            'name' => 'Mohammad Agung Rizki',
            'username' => 'magungrizki',
            'email' => 'herralpha@icloud.com',
            'password' => bcrypt('password'),
            'phone' => '956-202-2896',
            'address' => 'One Apple Park',
            'city' => 'Cuppertino',
            'state' => 'California',
            'zip' => '99324',
            'country' => 'United States',
            'company' => 'Apple Inc.',
            'avatar' => 'avatar/agung.png',
            'web' => '1',
            'app' => '1',
            'about' => "Hi! I'm Agung. I'm a Flutter and SwiftUI Developer. And I worked at Apple at Cupertino as SVP Software Development and I followed Craig Federighi path."

        ]);

        // ----------------------------------SECTION ADMIN--------------------------------------------
        // Admin::create([
        //     'username' => 'admin',
        //     'password' => bcrypt('GTX 1080 Ti'),
        //     'authorization_code' => bcrypt('mv230jqwdj92wkd012em193je'),
        // ]);
        // Admin::create([
        //     'username' => 'admin2',
        //     'password' => bcrypt('GTX 1080 Ti'),
        //     'authorization_code' => bcrypt('jjjf924f2edm12emffn3109e1'),
        // ]);
        


        //--------------------------------SECTION CATEGORY---------------------------------

        Category::create([
            'title' => 'Sport',
            'cover' => '/assets/picture/app/category/sport.png'
        ]);

        Category::create([
            'title' => 'Technology',
            'cover' => '/assets/picture/app/category/technology.png'
        ]);

        Category::create([
            'title' => 'Business',
            'cover' => '/assets/picture/app/category/business.png'
        ]);

        Category::create([
            'title' => 'Entertainment',
            'cover' => '/assets/picture/app/category/entertainment.png'
        ]);

        Category::create([
            'title' => 'Health',
            'cover' => '/assets/picture/app/category/health.png'
        ]);

        Category::create([
            'title' => 'Science',
            'cover' => '/assets/picture/app/category/science.png'
        ]);

        Category::create([
            'title' => 'Travel',
            'cover' => '/assets/picture/app/category/travel.png'
        ]);

        Category::create([
            'title' => 'Food',
            'cover' => '/assets/picture/app/category/food.png'
        ]);

        Category::create([
            'title' => 'Finance',
            'cover' => '/assets/picture/app/category/finance.png'
        ]);

        Category::create([
            'title' => 'News',
            'cover' => '/assets/picture/app/category/news.png'
        ]);

        Category::create([
            'title' => 'Music',
            'cover' => '/assets/picture/app/category/music.png'
        ]);

        //-----------------------------SECTION POSTS-----------------------------------------------

        Post::create([
            'title' => 'Natural Vacation',
            'description' => 'For who interest to make a website with theme Travel, we provide this for you',
            'category_id' => 7,
            'user_id' => 1,
            'framework' => 'Flutter',
            'compatibility' => 'Mobile App',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '2',
        ]);
        Post::create([
            'title' => 'Transportation Traveling',
            'description' => 'It is dedicated to who want to take a journey with public transportation',
            'category_id' => 7,
            'user_id' => 1,
            'framework' => 'Flutter',
            'compatibility' => 'Web Browser',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '0',
        ]);
        Post::create([
            'title' => 'Traveling with Friends',
            'description' => 'For who want to travel with friends, we provide this for you',
            'category_id' => 7,
            'user_id' => 1,
            'framework' => 'Flutter',
            'compatibility' => 'Mobile App',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '0',
        ]);
        Post::create([
            'title' => 'Heart Attack',
            'description' => 'Creating Heart Attack is a great way to make a website with theme Health',
            'category_id' => 5,
            'user_id' => 3,
            'framework' => 'Laravel',
            'compatibility' => 'Web Browser',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '90',
        ]);
        Post::create([
            'title' => 'Healthy Food',
            'description' => 'For who want to make a website with theme Food, we provide this for you',
            'category_id' => 8,
            'user_id' => 2,
            'framework' => 'Laravel',
            'compatibility' => 'Mobile App',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '0',
        ]);
        Post::create([
            'title' => 'EV Theme',
            'description' => 'For to who love Electric Vehicles.',
            'category_id' => 2,
            'user_id' => 3,
            'framework' => 'Flutter',
            'compatibility' => 'Hybrid',
            'file' => 'file/contoh.jpg',
            'cover' => 'cover/contoh.jpg',
            'price' => '0',
        ]);

        
        
    }
}
