<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 100; $i++) { 
    		DB::table('profiles')->insert([
	            'name' => 'randomProfile #' . $i,
	            'eloRating' => rand(300, 700),
	            'imageUrl' => 'http://cos.h-cdn.co/assets/cm/14/28/53becc47ef158_-_cos-girl-on-cell-phone-mdn-23346247.jpg',
	        ]);
    	}
	        
    }
}