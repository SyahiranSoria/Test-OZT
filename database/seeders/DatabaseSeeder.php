<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use App\Models\list_of_users;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        admin::create([
            'name' =>'admin',
            'email' => 'syahiran@gmail.com',
            'password' => Hash::make('admin')
        ]);
        


        list_of_users::create([
            'user_name' => 'John',
            'user_email' => 'John@gmail.com',
            'user_phone' => '01125018270',
            'user_address' => '123 Main St, City, Country',
            'user_image' => '/storage/images/cat-1.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Emma',
            'user_email' => 'Emma@gmail.com',
            'user_phone' => '01125018271',
            'user_address' => '124 Main St, City, Country',
            'user_image' => '/storage/images/cat-2.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Noah',
            'user_email' => 'Noah@gmail.com',
            'user_phone' => '01125018272',
            'user_address' => '125 Main St, City, Country',
            'user_image' => '/storage/images/cat-3.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Olivia',
            'user_email' => 'Olivia@gmail.com',
            'user_phone' => '01125018273',
            'user_address' => '126 Main St, City, Country',
            'user_image' => '/storage/images/cat-4.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Liam',
            'user_email' => 'Liam@gmail.com',
            'user_phone' => '01125018274',
            'user_address' => '127 Main St, City, Country',
            'user_image' => '/storage/images/cat-5.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Sophia',
            'user_email' => 'Sophia@gmail.com',
            'user_phone' => '01125018275',
            'user_address' => '128 Main St, City, Country',
            'user_image' => '/storage/images/cat-6.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Mason',
            'user_email' => 'Mason@gmail.com',
            'user_phone' => '01125018276',
            'user_address' => '129 Main St, City, Country',
            'user_image' => '/storage/images/cat-7.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Ava',
            'user_email' => 'Ava@gmail.com',
            'user_phone' => '01125018277',
            'user_address' => '130 Main St, City, Country',
            'user_image' => '/storage/images/cat-8.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Jacob',
            'user_email' => 'Jacob@gmail.com',
            'user_phone' => '01125018278',
            'user_address' => '131 Main St, City, Country',
            'user_image' => '/storage/images/cat-9.jpeg'
        ]);
        
        list_of_users::create([
            'user_name' => 'Isabella',
            'user_email' => 'Isabella@gmail.com',
            'user_phone' => '01125018279',
            'user_address' => '132 Main St, City, Country',
            'user_image' => '/storage/images/cat-10.jpeg'
        ]);
        
         
    }
}
