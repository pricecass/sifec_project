<?php

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
        //$this->call(RoleSeeder::class);
        //$this->call(CentreSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(DeclarationSeeder::class);
       // $this->call(RegistreSeeder::class);
        $this->call(MariageSeeder::class);
    }
}
