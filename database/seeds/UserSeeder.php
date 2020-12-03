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
             'name' => 'Etoro Abasy Ita',
             'email' => 'www.EtoroTech@yahoo.com',
             'password'=>Hash::make('1234'),
             'role'=>"Admin"
           ]); 
       
    }
}
