<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $i = 0;
        while ($i <= 10){
        	
        	DB::table('students')->insert([
        		'firstName' => str_random(7),
        		'lastName' => str_random(7),
        		'middleName' => str_random(7),
        		'course' => 'BSIS',
        		'contactPerson' => str_random(10),
        		'contactNumber' => random_int(10000000, 50000000)
        		]);
        	$i++;
        }
    }
}
