<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
          ['name'=>'rifat', 'email'=>'das@gmail.com', 'password'=>'1ew234'],
          ['name'=>'weat', 'email'=>'riatdaz@gmail.com', 'password'=>'1dsad234'],
          ['name'=>'efat', 'email'=>'riadsatz@gmail.com', 'password'=>'12sdaf34'],
          ['name'=>'risadfat', 'email'=>'rifdaatz@gmail.com', 'password'=>'1dsa234'],
        ];
        User::insert($users);
    }
}
