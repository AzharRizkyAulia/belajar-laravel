<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title'=>'Tips Cepat Nikah', 'content'=>'lorep ipsum'],
            ['title'=>'Haruskah Menunda Nikah ?', 'content'=>'lorep ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorep ipsum']
        ];
        //ke database
        DB::table('posts')->insert($post);
    }
}
