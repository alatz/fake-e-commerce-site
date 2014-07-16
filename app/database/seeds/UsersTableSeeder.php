<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User;
        $user->firstname = 'Aaron';
        $user->lastname = 'Latz';
        $user->email = 'aaron@aaronlatz.com';
        $user->password = Hash::make('password');
        $user->admin = 1;
        $user->save();
    }

}
