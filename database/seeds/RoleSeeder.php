<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'staff',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'guest',
            'guard_name' => 'web'
        ]);
    }
}
