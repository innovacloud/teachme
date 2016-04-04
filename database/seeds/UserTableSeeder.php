<?php
use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

/**
 * Created by PhpStorm.
 * User: Ramses
 * Date: 03/04/2016
 * Time: 11:18 PM
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $this->createAdmin();
    }

    public function createAdmin()
    {
        User::create([
            'name'      =>  'Ramses Tovar',
            'email'     =>  'ramses.tovar@gmail.com',
            'password'  =>  bcrypt('admin'),
            'type'      =>  'admin'
        ]);
    }

}