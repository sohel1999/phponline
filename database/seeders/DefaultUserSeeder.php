<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Shared\Models\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Steve',
            'last_name' => 'McDougall',
            'email' => 'juststevemcd@gmail.com',
        ]);
    }
}
