<?php

use Illuminate\Database\Seeder;
use App\Models\Mariage;

class MariageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 15; $i <= 50; $i++)
        {
            Mariage::create(
                [
                    'numero_acte'=>$i,
                    'option_matrimoniale'=>'Monogamie',
                    'regime_matrimonial'=>'Communauté des biens communs',
                    'montant_dot'=>50000,
                    'beneficiaire_dot'=>'Niama Dominique',
                    'coutume_presidant_union'=>'Congolaise',
                    'situation_particuliaire'=>'All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work ',
                    'declaration_id'=>$i,
                    'registre_id'=>1,
                ]);
        }

    }
}
