<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use User;

class AssignAdminRole extends Command
{

    protected $signature = 'app:assign-admin-role';
    protected $description = 'Command description';

    public function handle()
    {
        $userId = $this->argument('userId');
        $user = User::find($userId);

        if ($user) {
            $user->assignRole('admin');
            $this->info('Admin role assigned to user with ID ' . $userId);
        } else {
            $this->error('User with ID ' . $userId . ' not found.');
        }
    }
}
