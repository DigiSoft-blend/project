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
           DB::table('users')->insert([
             'name' => 'Silas Udofia',
             'email' => 'www.u.silas@yahoo.com',
             'password'=>Hash::make('1234'),
             'role'=>"Admin",
             'profileimage' => "12345"
           ]); 
       
    }
}
