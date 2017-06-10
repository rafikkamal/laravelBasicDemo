<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $user = new User();
        $user->name = 'rafik kamal';
        $user->email = 'rafik.rkn@gmail.com';
        $user->password = Hash::make('123');
        $user->save();
    }
}
