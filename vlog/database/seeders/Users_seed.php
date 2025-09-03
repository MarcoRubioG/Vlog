<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name'=>'Marco Esteban',
        'email'=>'admin@gmail.com',
        'password'=>Hash::make('123'),
        'nickname'=>'admin',
        'img'=>'default.jpg',
        'created_at'=>date('Y-m-d h:m:s')
        ]);

        DB::table('users')->insert([
        'name'=>'paco',
        'email'=>'paco@gmail.com',
        'password'=>Hash::make('345'),
        'nickname'=>'paquito',
        'img'=>'default.jpg',
        'created_at'=>date('Y-m-d h:m:s')
        ]);

       for($i=0;$i<50;$i++){
        DB::table('users')->insert([
        'name'=>'Tralalero'.$i,
        'email'=>'tiburoncin@gmail.com'.$i,
        'password'=>Hash::make('123'),
        'nickname'=>'tralalero'.$i,
        'img'=>'default.jpg',
        'created_at'=>date('Y-m-d h:m:s')
        ]);
       }
       
    }
}
