<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username'=>'firstuser',
			'password'=>Hash::make('first_password'),
			'email'=>'pepe@pepe.com',
			'estado' => 'activo',
			'gmt'=> -3,
			'avatar'=>'pepe.jpg'
		));
		User::create(array(
			'username'=>'seconduser',
			'password'=>Hash::make('second_password'),
			'email'=>'pepi@pepi.com',
			'estado' => 'activo',
			'gmt'=> -3,
			'avatar'=>'pepi.jpg'

		));
	}
}


