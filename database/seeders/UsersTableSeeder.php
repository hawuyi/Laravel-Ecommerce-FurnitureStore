<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => Hash::make('123456'),            
            ]);

        DB::table('categories')->insert(
             ['id' => 1, 'name'=> 'Sofa']);
        DB::table('categories')->insert(   
             ['id' => 2, 'name'=> 'Chair']);
        DB::table('categories')->insert(   
             ['id' => 3, 'name'=> 'Lamp']);

        DB::table('colors')->insert(
            ['id' => 1, 'name'=> 'red', 'code'=>'#e70808']);
        DB::table('colors')->insert(
            ['id' => 2, 'name'=> 'Green', 'code'=>'#3ec83c']);
        DB::table('colors')->insert(
            ['id' => 3, 'name'=> 'Blue', 'code'=>'#0d09e1']);

        DB::table('color_product')->insert(
            ['id' => 1, 'color_id' => '1','product_id' => '1']);
        DB::table('color_product')->insert(
            ['id' => 2, 'color_id' => '2','product_id' => '1']);
        DB::table('color_product')->insert(
            ['id' => 3, 'color_id' => '3','product_id' => '1']);
        DB::table('color_product')->insert(
            ['id' => 4, 'color_id' => '1','product_id' => '2']);
        DB::table('color_product')->insert(
            ['id' => 5, 'color_id' => '2','product_id' => '2']);
        DB::table('color_product')->insert(
            ['id' => 6, 'color_id' => '3','product_id' => '3']); 
        DB::table('color_product')->insert(
            ['id' => 7, 'color_id' => '3','product_id' => '4']);
        
        DB::table('items')->insert(
            ['id' => 1, 'product_id' => '1','color_id' => '1', 'order_id' =>'1', 'quantity' => 1 ]); 
        DB::table('items')->insert(
            ['id' => 2, 'product_id' => '2','color_id' => '2', 'order_id' =>'2', 'quantity' => 2 ]);
        DB::table('items')->insert(
            ['id' => 3, 'product_id' => '3','color_id' => '3', 'order_id' =>'3', 'quantity' => 3 ]); 
            
        DB::table('orders')->insert(
            ['id' => 1, 'user_id' => '1','name' => 'John', 'email' =>'john@gmail.com', 'phone' => 666, 'address' =>'taipei', 'city' =>'NY', 'state' =>'gd', 'zip' =>'123', 'country' =>'Taiwan', 'total' =>'888', 'status' =>'cancelled']);
        DB::table('orders')->insert(
            ['id' => 2, 'user_id' => '1','name' => 'John', 'email' =>'john@gmail.com', 'phone' => 666, 'address' =>'taipei', 'city' =>'NY', 'state' =>'gd', 'zip' =>'123', 'country' =>'Taiwan', 'total' =>'666', 'status' =>'pending']);
        DB::table('orders')->insert(
            ['id' => 3, 'user_id' => '1','name' => 'John', 'email' =>'john@gmail.com', 'phone' => 666, 'address' =>'taipei', 'city' =>'NY', 'state' =>'gd', 'zip' =>'123', 'country' =>'Taiwan', 'total' =>'777', 'status' =>'pending']);
        
        DB::table('products')->insert(
            ['id' => 1, 'title' => 'Classic Industrial Pendant', 'description' => 'The Classic Industrial Pendant is finished in an on-trend mix of two finishes; matt black and solid brass. Compatible with LED lamps and dimmable Dimmable Matt black & antique brass lacquer Constructed from aluminium alloy', 'price' =>'880', 'category_id' => 3, 'image' =>'products/16928086563395.png']);    
        DB::table('products')->insert(
            ['id' => 2, 'title' => 'Minimal Sofa Chair', 'description' => 'SOFT & COMFORTABLE: The lazy chair is made of soft and comfortable fabric. It is fluffy and full, long sitting without collapse. And it comes with a footrest on which you can rest your legs for an extremely comfortable seating experience, allowing you to enjoy leisure time and relax yourself', 'price' =>'1200', 'category_id' => 2, 'image' =>'products/16928089194633.png']);
        DB::table('products')->insert(
            ['id' => 3, 'title' => 'Luxury Chair', 'description' => 'Solid metal construction with either gold or bronze finished metal legs High-density foam rests just below and behind the luxurious and plush velvet upholstery Mid-Century Modern style with tufted seat back', 'price' =>'4990', 'category_id' => 2, 'image' =>'products/16928090129115.png']);    
        DB::table('products')->insert(
            ['id' => 4, 'title' => 'Red Comfy Sofa', 'description' => 'This chair is a wonderful addation to any rooms such as living room,bedroom and so on.Perfectly match with your furnitures,which brings a sense of modern to your home decor', 'price' =>'3110', 'category_id' => 1, 'image' =>'products/16928091175548.png']);     
    }
}
