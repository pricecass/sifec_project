<?php

use App\Models\Declaration;

use Illuminate\Database\Seeder;

class DeclarationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 10; $i <= 51; $i++)
        {
            Declaration::create(
                [
                    'acte_naiss_epoux'=>$i,
                    'nom_epoux'=>'Nom epoux ',
                    'prenom_epoux'=>'',
                    'adresse_epoux'=>$i.' rue Sibiti-Diata',
                    'profession_epoux'=>'Proffession epoux ',
                    'date_naiss_epoux'=>'1985/04/14',
                    'lieu_naiss_epoux'=>'Dolisie',
                    'nationalite_epoux'=>'Congolaise',
                    'situation_matrimoniale_epoux'=>'Pré-marié',
                    'parent1_epoux'=>'Parent1 epoux',
                    'parent2_epoux'=>'Parent2 epoux',
                    'temoin1_epoux'=>'Temoin1 epoux',
                    'temoin2_epoux'=>'Temoin2 epoux',
                    'domicile_temoin1_epoux'=>'237 rue Ndouo-Ouenze BZV',
                    'domicile_temoin2_epoux'=>'237 rue Ndouo-Ouenze BZV',

                    'acte_naiss_epouse'=>$i + 1,
                    'nom_epouse'=>'Nom epouse',
                    'prenom_epouse'=>'Prenom epoux',
                    'adresse_epouse'=>'Adresse epouse',
                    'profession_epouse'=>'Profession epouse',
                    'date_naiss_epouse'=>'1992/05/27',
                    'lieu_naiss_epouse'=>'Ouesso',
                    'nationalite_epouse'=>'Congolaise',
                    'situation_matrimoniale_epouse'=>'Pré-marié',
                    'parent1_epouse'=>'Parent1 epouse',
                    'parent2_epouse'=>'Prarent2 epouse',
                    'temoin1_epouse'=>'Temoin1 epouse',
                    'temoin2_epouse'=>'Temoin2 epouse',
                    'domicile_temoin1_epouse'=>'20 rue Franceville-Moungali BZV',
                    'domicile_temoin2_epouse'=>'20 rue Franceville-Moungali BZV',

                    'date_celebration'=>'2019-12-15',
                    'lieu_celebration'=>'Mairie centrale de Brazzaville',
                    'filiation'=>'-',
                    'centre_id'=>2,
                ]);

        }

//        Declaration::create(
//            [
//                'acte_naiss_epoux'=>'547',
//                'nom_epoux'=>'Dinala',
//                'prenom_epoux'=>'Freddy',
//                'adresse_epoux'=>'542 rue Niari-la poudrière BZV',
//                'profession_epoux'=>'Commercant',
//                'date_naiss_epoux'=>'1985/04/14',
//                'lieu_naiss_epoux'=>'Dolisie',
//                'nationalite_epoux'=>'Congolaise',
//                'situation_matrimoniale_epoux'=>'Pré-marié',
//                'parent1_epoux'=>'Mabele paul',
//                'parent2_epoux'=>'Ngoula Albertine',
//                'temoin1_epoux'=>'Okoya Marcelin',
//                'temoin2_epoux'=>'Aboya Veronique',
//                'domicile_temoin1_epoux'=>'237 rue Ndouo-Ouenze BZV',
//                'domicile_temoin2_epoux'=>'237 rue Ndouo-Ouenze BZV',
//
//                'acte_naiss_epouse'=>'841',
//                'nom_epouse'=>'Mpaka',
//                'prenom_epouse'=>'Odette',
//                'adresse_epouse'=>'123 rue du Gamboma-Talangai BZV',
//                'profession_epouse'=>'Enseignante',
//                'date_naiss_epouse'=>'1992/05/27',
//                'lieu_naiss_epouse'=>'Ouesso',
//                'nationalite_epouse'=>'Congolaise',
//                'situation_matrimoniale_epouse'=>'Pré-marié',
//                'parent1_epouse'=>'Mpaka Jean Pierre',
//                'parent2_epouse'=>'Babela ursulle',
//                'temoin1_epouse'=>'Ekouele Roger',
//                'temoin2_epouse'=>'Nstimba sandrine',
//                'domicile_temoin1_epouse'=>'20 rue Franceville-Moungali BZV',
//                'domicile_temoin2_epouse'=>'20 rue Franceville-Moungali BZV',
//
//                'date_celebration'=>'2019-12-15',
//                'lieu_celebration'=>'Mairie centrale de Brazzaville',
//                'filiation'=>'-',
//                'centre_id'=>2,
//            ]);
    }
}
