<?php

use Blog\Entities\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();

        User::create(
            [
                'name'  =>  'Pierre Ferré',
                'email' =>  'pierre@pierreferre.com',
                'password'  => Hash::make('secret'),
                'role'  =>  'administrator'
            ]
        );

        User::create(
            [
                'name'  =>  'Jane Ferré',
                'email' =>  'ladyjanemcgill@yahoo.co.uk',
                'password'  => Hash::make('bbpie'),
                'role'  =>  'administrator'
            ]
        );
	}

}
