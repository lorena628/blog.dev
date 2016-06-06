<?php

class UserTableSeeder extends Seeder {
    public function run()
    {
        $user = new User();
        $user->id= '4';
        $user->email= 'lorena.villanueva@yahoo.com';
        $user->password= $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->id= '8';
        $user->email= 'jondoe@gmail.com';
        $user->password= $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->id= '12';
        $user->email= 'janedoe@gmail.com';
        $user->password= $_ENV['USER_PASSWORD'];
        $user->save();

    }
}