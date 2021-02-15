<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Meta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meta= Meta::whereIn('name',['role','user_status'])
                    ->whereIn('value',['admin','active'])
                    ->get();
        //dd($meta);
        $status = null;
        $role=null;
        foreach ($meta as $key => $value) {
            if($value->name == 'role' && $value->value =='admin'){
                $role=$value->id;
            }
            if($value->name == 'user_status' && $value->value =='active'){
                $status=$value->id;
            }
        }
        User::insert([
            [
            'name'=>"wayan Sukerta",
            'slug'=>Str::slug("wayan Sukerta","-"),
            'email'=>'hello@wayansukerta.com',
            'password'=> Hash::make('mudita21'),
            'email_verified_at' => date("Y-m-d h:i:s"),
            'status'=>$status,
            'role'=>$role,
            ],
        ]);
    }
}
