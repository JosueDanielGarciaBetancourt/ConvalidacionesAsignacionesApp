<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run(): void
    {   
        $user1 = new User;
        $user1->name = 'Admin'; 
        $user1->email = "admin@continental.edu.pe";
        $user1->email_verified_at = now();
        $user1->password = bcrypt("123");
        $user1->remember_token = "admin_token";
        
        $user1->save();

        User::factory(5)->create();
    }
}
