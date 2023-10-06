<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create(['name' => 'Admin', 'email' => 'admin@gamil.com', 'password' => '$2y$10$TQh9QyIxfC3P35cAd.6ImeepmQV61sfR7BV7kHzNVe1GzSTXQ7o0O']);
        $role = Role::create(['name' => 'admin']);
        $user->assignRole('admin'); 
    }
}
