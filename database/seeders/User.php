<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index < 11; $index++)
        {
            DB::table('users')->insert([
                'user_name' => 'dafault' . $index, 
                'fist_name' => 'dafault', 
                'last_name'=> 'dafault', 
                'email' => Str::random(10).'@dafult.com', 
                'pasword' => password_hash('dafualt', PASSWORD_DEFAULT), 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()]
            );
        }
    }
}
