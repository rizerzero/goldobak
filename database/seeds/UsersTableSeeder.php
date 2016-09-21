<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users=[
       			
       			[
       				'name'=>'Master',
       				'email'=>'Master@gmail.com',
              'password'=>bcrypt(123),
       				'remember_token'=>'qfsdgaqs54dgfds4q545dssf45qd',
       			],
       			[
       				'name'=>'Reader',
       				'email'=>'Reader@gmail.com',
              'password'=>bcrypt(123),
       				'remember_token'=>'qfsdgaqs54dgfds4q545dssf45qd',
       			],
       			[
       				'name'=>'Editor',
       				'email'=>'Editor@gmail.com',
       				'password'=>bcrypt(123),
       				'remember_token'=>'qfsdgaqs54dgfds4q545dssf45qd',
       			]


       ];

       	foreach ($users as $user) {
       		User::create($user);
       	}

    }
}
