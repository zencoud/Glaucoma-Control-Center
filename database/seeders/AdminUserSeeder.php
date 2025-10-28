<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar si ya existe un usuario admin
        if (User::where('email', 'admin@glaucomacc.com.mx')->exists()) {
            $this->command->info('Usuario administrador ya existe.');
            return;
        }

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@glaucomacc.com.mx',
            'password' => Hash::make('GlaucomaSecure2025!'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('Usuario administrador creado exitosamente.');
        $this->command->info('Email: admin@glaucomacc.com.mx');
        $this->command->info('Password: GlaucomaSecure2025!');
    }
}