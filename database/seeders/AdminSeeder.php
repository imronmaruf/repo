<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\VerifyMailAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $verifykey = Str::random(100);

        $admin = User::create([
            'fullname' => 'Administrator',
            'nim' => '123123123',
            'email' => 'siunimal@gmail.com',
            'password' => bcrypt('Adminrepo1234'),
            'verify_key' => $verifykey,
            'gambar' => 'logo-unimal.png',
            'role' => 'admin',
]);

$admin->markEmailAsVerified();

    }
}
