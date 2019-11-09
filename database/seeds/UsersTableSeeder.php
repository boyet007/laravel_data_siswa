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
        $user->role = 'admin';
        $user->name = 'boyet';
        $user->email = 'boyet007@gmail.com';
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new User;
        $user->role = 'user';
        $user->name = 'Wynne';
        $user->email = 'wynne_zong@gmail.com';
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new User;
        $user->role = 'user';
        $user->name = 'Renny';
        $user->email = 'renny@gmail.com';
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new User;
        $user->role = 'user';
        $user->name = 'Yanti';
        $user->email = 'yantiy@gmail.com';
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new User;
        $user->role = 'user';
        $user->name = 'Rita';
        $user->email = 'rita@gmail.com';
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $user = new User;
        $user->role = 'user';
        $user->name = 'Bambang';
        $user->email = 'bambang@gmail.com';
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
