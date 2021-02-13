<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name'=>"wayan Sukerta",
            'email'=>'hello@wayansukerta.com',
            'password'=> Hash::make('mudita21'),
            'email_verified_at' => date("Y-m-d h:i:s"),
            'is_active'=>true,
            'role'=>'admin',
            ],
        ]);
    }
}
