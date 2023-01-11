<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "username"=>"adminlsp",
                "name"=>"Admin LSP",
                "password"=>"password",
            ],
            [
                "username"=>"sertifikasi",
                "name"=>"Sertifikasi",
                "password"=>"password",
            ],
            [
                "username"=>"asesor",
                "name"=>"Asesor",
                "password"=>"password",
            ]
        ];
        
        foreach ($users as $user){
            User::create([
                "username"=>$user["username"],
                "name"=>$user["name"],
                "password"=>Hash::make($user["password"]),
            ]); 
        }
    }
}
