<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
                [
                    'username'=>'admin',
                    'password'=>bcrypt('admin'),
                    'remember_token'=>str_random(8),
                    'last_name'=>'Moupele',
                    'first_name'=>'Price',
                    'address'=>'40 rue du pool',
                    'email'=>'price@example.com',
                    'telephone'=>'056673138',
                    'function'=>'Maire central de Brazzaville',
                    'role_id'=>1,
                    'active'=>1,
                    'centre_id'=>9,
                ]);
        User::create(
                [
                    'username'=>'officier1',
                    'password'=>bcrypt('officier1'),
                    'remember_token'=>str_random(8),
                    'last_name'=>'Mfoulou',
                    'first_name'=>'Cass',
                    'address'=>'42 rue du pool',
                    'email'=>'cass@example',
                    'telephone'=>'069125764',
                    'function'=>'Maire de Ouenze',
                    'role_id'=>2,
                    'active'=>1,
                    'centre_id'=>16,
                ]);
        User::create(
            [
                'username'=>'commis1',
                'password'=>bcrypt('commis1'),
                'remember_token'=>str_random(8),
                'last_name'=>'Makita',
                'first_name'=>'Fragene',
                'address'=>'48 rue du pool',
                'email'=>'makf@example',
                'telephone'=>'059125764',
                'function'=>'commis aux mariages',
                'role_id'=>2,
                'active'=>1,
                'centre_id'=>9,
            ]);
    }
}
