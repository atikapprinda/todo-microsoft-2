<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todoMicrosoftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //table users
        DB::table('users')->insert([
            ["name" => "atik", "email" => "atik@todo.org" ,"password" => "at123" ],
            ["name" => "alina", "email" => "alina@todo.org" ,"password" => "al123" ],
            ["name" => "fikha", "email" => "fikha@todo.org" ,"password" => "fi123" ],
        ]);
        //table lists
        DB::table('lists')->insert([
            ["color_id" => "2", "user_id" => 2, "task_id" => "1" ,"name" => "Mengerjakan Migration DB", "password" => "db" ],
            ["color_id" => "2", "user_id" => 2, "task_id" => "1" ,"name" => "Mengerjakan Migration DB", "password" => "db" ],
            ["color_id" => "2", "user_id" => 2, "task_id" => "1" ,"name" => "Mengerjakan Migration DB", "password" => "db" ]
            
        ]);
        //table colors
        DB::table('colors')->insert([
            "name" => "blue",
            "name" => "green",
            "name" => "yellow",
        ]);
        //table tasks
        DB::table('tasks')->insert([
            ["name" => "Nonton video", "note" => "sesi 5 ya guys" ],
            ["name" => "Nentuin judul", "note" => "min. 5 kata" ],
            ["name" => "Tanya ke senior", "note" => "SKSD aja dehh" ],
        ]);
        //table categories
        DB::table('categories')->insert([
            "name" => "school",
            "name" => "work",
            "name" => "self-love",
        ]);
    }
}
