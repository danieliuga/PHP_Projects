<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('assign-admin-role', function () {
    $user1 = \App\Models\User::find(1);
    $user2 = \App\Models\User::find(2);
    $user3 = \App\Models\User::find(3);
    $user4 = \App\Models\User::find(4);

    if ($user1 && $user2) {
        $user1->assignRole('admin', 'editor');
        $user2->assignRole('admin');
        $user3->assignRole('user');
        $user4->assignRole('user');
        $this->info('Role assigned successfully.');
    } else {
        $this->error('User not found.');
    }
})->describe('Assign the admin role to a user');