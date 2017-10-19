<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Test1 TestUser',
                'email' => 'test1@test.com',
                'password' => 'password',
                'height' => '5\'7"',
                'weight' => '239',
                'age' => '39',
            ],
            [
                'name' => 'Test2 TestUser',
                'email' => 'test2@test.com',
                'password' => 'password',
                'height' => '5\'10"',
                'weight' => '190',
                'age' => '28',
            ],
            [
                'name' => 'Test3 TestUser',
                'email' => 'test3@test.com',
                'password' => 'password',
                'height' => '5\'9"',
                'weight' => '185',
                'age' => '32',
            ],
            [
                'name' => 'Test4 TestUser',
                'email' => 'test4@test.com',
                'password' => 'password',
                'height' => '6\'',
                'weight' => '201',
                'age' => '30',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
