<?php

use Illuminate\Database\Seeder;
use App\Models\Centre;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centre::create(
            [
                'designation'=>'Hotel de ville',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Brazzaville',
                'locality'=>'Brazzaville',
                'address'=>'Centre ville',
                'category'=>'A',
                'p_center_id'=>9,
            ]);
        Centre::create(
            [
                'designation'=>'Mairie de Moungali',
                'department'=>'Brazzaville',
                'commune'=>'Commune de moungali',
                'locality'=>'Brazzaville',
                'address'=>'Avenue de la paix',
                'category'=>'B',
                'p_center_id'=>9,
            ]);


        Centre::create(
            [
                'designation'=>'Mairie de Poto-Poto',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Brazzaville',
                'locality'=>'Brazzaville',
                'address'=>'145 Avenue de la paix',
                'category'=>'B',
                'p_center_id'=>9,
            ]);
        Centre::create(
            [
                'designation'=>'Mairie de Talangai',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Talangai',
                'locality'=>'Brazzaville',
                'address'=>'Avenue Marien Ngouabi',
                'category'=>'B',
                'p_center_id'=>9,
            ]);

        Centre::create(
            [
                'designation'=>'Mairie de Bacongo',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Brazzaville',
                'locality'=>'Brazzaville',
                'address'=>'Avenue Matsoua',
                'category'=>'B',
                'p_center_id'=>9,
            ]);
        Centre::create(
            [
                'designation'=>'Mairie de Makélékélé',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Makélékélé',
                'locality'=>'Brazzaville',
                'address'=>'Avenue de l\'hopital',
                'category'=>'B',
                'p_center_id'=>9,
            ]);

        Centre::create(
            [
                'designation'=>'Mairie de Mifilou',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Mfilou',
                'locality'=>'Brazzaville',
                'address'=>'Avenue de la Base',
                'category'=>'B',
                'p_center_id'=>9,
            ]);
        Centre::create(
            [
                'designation'=>'Ouenzé',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Ouenzé',
                'locality'=>'Brazzaville',
                'address'=>'Avenue des trois marthyrs',
                'category'=>'B',
                'p_center_id'=>9,
            ]);

        Centre::create(
            [
                'designation'=>'Mairie de Djiri',
                'department'=>'Brazzaville',
                'commune'=>'Commune de Djiri',
                'locality'=>'Brazzaville',
                'address'=>'Avenue de DSN',
                'category'=>'B',
                'p_center_id'=>9,
            ]);





        /*Centre::create(
            [
                'designation'=>'Hotel de ville',
                'department'=>'Pointe-Noire',
                'commune'=>'Commune de Pointe-Noire',
                'locality'=>'Pointe-Noire',
                'address'=>'Centre ville',
                'category'=>'A',
            ]);
        Centre::create(
            [
                'designation'=>'Mairie de Tié-Tié',
                'department'=>'Pointe-Noire',
                'commune'=>'Commune de Tié-Tié',
                'locality'=>'Pointe-Noire',
                'address'=>'Avenue de la gare',
                'category'=>'B',
                'p_center_id'=>1,
            ]);

        Centre::create(
            [
                'designation'=>'Mairie de Mvoumvou',
                'department'=>'Pointe-Noire',
                'commune'=>'Commune de Mvoumvou',
                'locality'=>'Pointe-Noire',
                'address'=>'Avenue de P. Lissouba',
                'category'=>'B',
                'p_center_id'=>1,
            ]);
        Centre::create(
            [
                'designation'=>'Hotel de ville',
                'department'=>'Niari',
                'commune'=>'Commune de Dolisie',
                'locality'=>'Dolisie',
                'address'=>'Avenue de la gare',
                'category'=>'A',
            ]);

        Centre::create(
            [
                'designation'=>'Mairie Arr.1',
                'department'=>'Niari',
                'commune'=>'Commune de Dolisie',
                'locality'=>'Dolisie',
                'address'=>'Avenue F. Eboue',
                'category'=>'B',
                'p_center_id'=>5,
            ]);
        Centre::create(
            [
                'designation'=>'Mairie Arr.2',
                'department'=>'Niari',
                'commune'=>'Commune de Dolisie',
                'locality'=>'Dolisie',
                'address'=>'Avenue de l\'Indépendance',
                'category'=>'B',
                'p_center_id'=>5,
            ]);

        Centre::create(
            [
                'designation'=>'Mairie de Nkayi',
                'department'=>'Bouenza',
                'commune'=>'Commune de Nkayi',
                'locality'=>'Nkayi',
                'address'=>'Avenue du grand hopital',
                'category'=>'A',
            ]);*/
    }
}
