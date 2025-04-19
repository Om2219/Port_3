<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'Om',
            'password' => bcrypt('L£d74Om8P'), 
            'email' => 'om221922@gmail.com',
            'name' => 'Om',
            'uid' => 11
        ]);

        User::create([
            'username' => 'Jessica',
            'password' => bcrypt('/6372EY1;m'), 
            'email' => 'Jessica@gmail.com',
            'name' => 'Jessica',
            'uid' => 10,
        ]);

        User::create([
            'username' => 'Joshua',
            'password' => bcrypt('48I+84i&*('), 
            'email' => 'Joshua@gmail.com',
            'name' => 'Joshua',
            'uid' => 9
        ]);

        User::create([
            'username' => 'Chloe',
            'password' => bcrypt('33t",K!28?'), 
            'email' => 'Chloe@gmail.com',
            'name' => 'Chloe',
            'uid' => 8 
        ]);

        User::create([
            'username' => 'Samuel',
            'password' => bcrypt('G.u1;7g4c/'), 
            'email' => 'Samuel@gmail.com',
            'name' => 'Samuel',
            'uid' => 7
        ]);

        User::create([
            'username' => 'Sophie',
            'password' => bcrypt('mD^C£466M0'), 
            'email' => 'Sophie@gmail.com',
            'name' => 'Sophie',
            'uid' => 6
        ]);

        User::create([
            'username' => 'Jack',
            'password' => bcrypt('aBjj\\E,505'), 
            'email' => 'Jack@gmail.com',
            'name' => 'Jack',
            'uid' => 5
        ]);

        User::create([
            'username' => 'Emily',
            'password' => bcrypt('6T&f4/0i/D'), 
            'email' => 'Emily@gmail.com',
            'name' => 'Emily',
            'uid' => 4
        ]);

        User::create([
            'username' => 'Thomas',
            'password' => bcrypt('lAq8!1~4/b'), 
            'email' => 'Thomas@gmail.com',
            'name' => 'Thomas',
            'uid' => 3
        ]);

        User::create([
            'username' => 'Olivia',
            'password' => bcrypt('423~rC+b]|'), 
            'email' => 'Olivia@gmail.com',
            'name' => 'Olivia',
            'uid' => 2
        ]);

        User::create([
            'username' => 'Harry',
            'password' => bcrypt('O5)2g>w490'), 
            'email' => 'Harry@gmail.com',
            'name' => 'Harry',
            'uid' => 1
        ]);
    }
}
