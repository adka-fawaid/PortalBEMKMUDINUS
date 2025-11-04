<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar 2 akun yang diperbolehkan login
        $users = [
            [
                'name' => 'BEM KM',
                'email' => 'bemkm@orma.dinus.ac.id',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Kementerian Kreasi',
                'email' => 'kementeriankreasi@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Testing User',
                'email' => 'testing@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $data) {
            // Idempotent: update jika sudah ada berdasarkan email, kalau belum maka buat
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => $data['password'],
                    // Tandai email sudah terverifikasi agar tidak terhalang middleware/verifikasi
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
