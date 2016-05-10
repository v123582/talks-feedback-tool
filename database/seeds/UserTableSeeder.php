<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
	    User::create(array(
          	'name'     => 'admin',
	        'email'     => 'admin@admin.com',
	        'serialNumber' => 'admin',
	    ));
	     User::create(array(
          	'name'     => 'test',
	        'email'     => 'test@test.com',
	        'serialNumber' => 'test',
	    ));
    }
}
