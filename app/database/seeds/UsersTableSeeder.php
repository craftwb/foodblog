<?php

use Blog\Entities\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create(
            [
                'name'  =>  'Pierre Ferré',
                'email' =>  'pierre@pierreferre.com',
                'password'  => Hash::make('secret'),
                'role'  =>  'administrator'
            ]
        );
	}

}
