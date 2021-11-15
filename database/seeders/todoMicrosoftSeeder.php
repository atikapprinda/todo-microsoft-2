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
            [
                "name" => "atik", 
                "email" => "atik@todo.org",
                "password" => "at123",
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ],      
        ]);

        //table colors
        DB::table('colors')->insert([
            [
                "name" => "blue",
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ]
            
            
        ]);
        //table lists
        DB::table('lists')->insert([
            [
                "color_id" => 1, 
                "user_id" => 1, 
                "name" => "Mengerjakan Migration DB", 
                "password" => "123",
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time()) 
            ],
            
        ]);
        
        //table tasks
        DB::table('tasks')->insert([
            [
                "list_id" => 1,
                "user_id" => 1,
                "name" => "Nonton video",
                "reminder_datetime" => date('Y-m-d H:i:s', time()),
                "due_date" => date('Y-m-d', time()),
                "attachment_url" => "https://github.com/atikapprinda/todo-microsoft-2",
                "note" => "sesi 5 ya guys",
                "is_complete" => false,
                "is_my_day" => false,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ],
        ]);
        //table categories
        DB::table('categories')->insert([
            [
                "name" => "school",
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ]
        ]);
        //table task_categories
        DB::table('task_categories')->insert([
            [
                "task_id" => 1,
                "category_id" => 1,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ]
        ]);
        //table subtask
        DB::table('subtasks')->insert([
            [
                "task_id" => 1,
                "name" => "mencoba lagi dan lagi",
                "is_complete" => false,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ]
        ]);
    }
}
