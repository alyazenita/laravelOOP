<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){

    		DB::table('users')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'password' =>  Hash::make('password'),
    			'gender' => 'female',
    			'birth_place' => $faker->city,
    			'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'job' => $faker->jobTitle,
    			'created_at' => Carbon::now(),
    		]);
 
    	}
    }
}
