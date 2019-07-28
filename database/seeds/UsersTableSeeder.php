<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Ruben Betancourt';
        $user->email = 'rubentorres26@gmail.com';
        $user->birthday = '1992-07-26';        
        $user->identify = 20756133;        
        $user->avatar = 'avatar.png';
        $user->password = Hash::make('123456');
        $user->email_verified_at = now();
        $user->status = true;
        $user->gender = true;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Edgar Silva';
        $user->email = 'edgarsilvalovera@gmail.com';
        $user->birthday = '1989-08-19';
        $user->identify = 18277593;
        $user->avatar = 'avatar.png';
        $user->password = Hash::make('123456');
        $user->email_verified_at = now();
        $user->status = true;
        $user->gender = true;
        $user->save();
        $user->roles()->attach($role_admin);        
    }
}
