<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\Factory::create(); //import library faker
	 
	 $limit = 5; //batasan berapa banyak data
	 
	 for ($i = 0; $i < $limit; $i++){
		 DB::table('users')->insert([ //mengisi data di database
		 'nama' => $faker->name,
		 'email' => $faker->unique()->email,//email unique sehingga tidak ada yg sama
		 'username' => $faker->username,
		 'password'=> $faker->password,
	
	 ]);
    }
}
}