<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'boyet';
        $user->email = 'boyet007@gmail.com';
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
