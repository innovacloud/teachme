<?php
use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

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
        $this->createUsers(50);
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

    public function createUsers($total_reg)
    {
        $faker = Faker::create();

        for ( $i = 0; $i < $total_reg; $i++) {
            User::create([
                'name'      =>  $faker->name,
                'email'     =>  $faker->email,
                'password'  =>  bcrypt('user'),
                'type'      =>  'user'
            ]);
        }
    }
}