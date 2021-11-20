<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Iqbal',
            'role_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $admin->assignRole('admin');
    }
}
