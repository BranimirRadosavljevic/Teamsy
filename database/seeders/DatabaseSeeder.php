<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tenant::factory(2)->create();
        User::factory(10)->create(['tenant_id' => 1]);
        User::factory(10)->create(['tenant_id' => 2]);
    }
}
