<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // users
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin1234'),
            'role_as' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // brands
        DB::table('brands')->insert([
            'name' => 'Ray Ban',
            'slug' => 'ray-ban',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'Oakley',
            'slug' => 'oakley',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // categories
        DB::table('categories')->insert([
            'name' => 'Sunglasses',
            'slug' => 'sunglasses',
            'description' => 'Shield your eyes from the sun in style with our collection of sunglasses. From classic aviators to trendy oversized frames, we have a variety of styles to suit every taste. Our sunglasses are made from durable materials and feature UV protection to keep your eyes safe from harmful rays. Whether you\'re lounging by the pool, hitting the beach, or exploring the great outdoors, our sunglasses will keep you looking cool and feeling comfortable.',
            'meta_title' => 'Sunglasses',
            'meta_keyword' => 'sunglasses, eyewear, UV protection',
            'meta_description' => 'Explore our collection of sunglasses for men and women. Find the perfect pair for any occasion.',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Prescription Glasses',
            'slug' => 'prescription-glasses',
            'description' => 'Prescription Eyewear',
            'meta_title' => 'Prescription Eyewear: Find the Perfect Glasses for Your Vision Needs',
            'meta_keyword' => 'Prescription glasses, eyeglasses, prescription sunglasses, vision correction, eyewear',
            'meta_description' => 'Shop our collection of prescription eyewear. Find the perfect glasses for your vision needs, including eyeglasses and prescription sunglasses. Our selection includes a variety of styles and materials to suit your preferences.',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // products
        DB::table('products')->insert([
            'name' => 'Ray-Ban Aviator Classic Men\'s Sunglasses',
            'slug' => 'ray-bans',
            'brand' => 'Ray Ban',
            'small_description' => 'Elevate your style with Ray-Ban sunglasses. Crafted with precision and style, these sunglasses offer the perfect blend of fashion and function. With a wide range of iconic designs and high-quality materials, Ray-Ban sunglasses are a must-have accessory for any wardrobe. Protect your eyes in style and make a statement with Ray-Ban sunglasses.',
            'description' => 'Ray-Ban sunglasses are crafted with precision and style, offering the perfect blend of fashion and function. Our sunglasses feature high-quality lenses that provide 100% UV protection, ensuring your eyes are shielded from harmful rays. The frames are made from durable materials, ensuring long-lasting wear and comfort. With a wide range of iconic designs, including the classic Aviator and Wayfarer styles, as well as modern designs like the Clubmaster and Round frames, there\'s a pair of Ray-Ban sunglasses to suit every style. Whether you\'re lounging by the pool, hitting the beach, or exploring the city, Ray-Ban sunglasses are the perfect accessory to elevate your look and protect your eyes.',
            'meta_title' => 'Shop Ray-Ban Sunglasses | Iconic Designs, UV Protection',
            'meta_keyword' => 'Ray-Ban, sunglasses, fashion, UV protection, iconic designs, high-quality materials',
            'meta_description' => 'Elevate your style with Ray-Ban sunglasses. Crafted with precision and style, these sunglasses offer the perfect blend of fashion and function. With a wide range of iconic designs and high-quality materials, Ray-Ban sunglasses are a must-have accessory for any wardrobe. Protect your eyes in style and make a statement with Ray-Ban sunglasses.',
            'original_price' => '221',
            'selling_price' => '177',
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
