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
        Role::create(
            [
                'title'=>'Administrateur',
                'slug'=>'admin',
            ]);
        Role::create(
            [
                'title'=>'Officier d\'Etat Civil',
                'slug'=>'OEC',
            ]);
        Role::create(
            [
                'title'=>'Commis aux mariages',
                'slug'=>'commis',
            ]);
    }
}
