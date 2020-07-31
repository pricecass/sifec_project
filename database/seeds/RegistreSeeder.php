<?php

use Illuminate\Database\Seeder;
use App\Models\Registre;


class RegistreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registre::create(
            [
                'reference'=>'R2',
                'closed_at'=>'2019/12/31',
                'centre_id'=>1,
                'active'=>1,
            ]);
        Registre::create(
            [
                'reference'=>'R1',
                'closed_at'=>'2019/12/31',
                'centre_id'=>1,
                'active'=>0,
            ]);
    }
}
