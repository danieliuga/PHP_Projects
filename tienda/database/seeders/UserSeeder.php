<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User();
        $user->name = 'daniel';
        $user->email= 'dani04iuga@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save() ;

        $user2 = new User();
        $user2->name = 'joanna';
        $user2->email= 'joannamartinez@gmail.com';
        $user2->password = Hash::make('12345678');
        $user2->save() ;

        $user3 = new User();
        $user3->name = 'samu';
        $user3->email= 'samuelcortes@gmail.com';
        $user3->password = Hash::make('12345678');
        $user3->save() ;

        $user4 = new User();
        $user4->name = 'lucas';
        $user4->email= 'lucashernandez@gmail.com';
        $user4->password = Hash::make('12345678');
        $user4->save() ;
    }
}
