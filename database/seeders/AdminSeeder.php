<?php

namespace Database\Seeders;

use App\Models\Referral;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', '=', 'admin@bitrader.net')->first();

        if ($admin === null) {
            $admin = User::create([
                'name' => 'Admin Panel',
                'role' => 'admin',
                'status' => 1,
                'balance' => 500000,
                'email' => 'admin@bitrader.net',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('ADMIN12345'),
            ]);

            $referral = Referral::create(['user_id' => $admin->id]);
        }

    }
}
