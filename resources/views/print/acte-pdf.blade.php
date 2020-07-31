

<!DOCTYPE html>
<html>
<head>
    <title>www.sifec.cg</title>

    @include('print.print-page-style')

    <style type="text/css">
        table { vertical-align: top; }
        tr    { vertical-align: top; }
        td    { vertical-align: top; }

        body {
            color:black;
            background-color:white;
            background-image:url({{ URL:: to( 'tools/asset/images/bg-sifec-projet4.png' ) }});
            background-repeat:no-repeat;
            background-position:center center;
            font-size: 12px;
            font-family: 'Lato', Calibri, Arial, sans-serif;
        }

        .small-img{
            width: 60px;
            height: 50px;
        }
    </style>

</head>

<body>

    <div>

    {{-- En-tete de page --}}
    <table cellspacing="0" style="width: 100%; text-align: center;">
        <tr>
            <td style="width: 40%;">
                <span style="font-weight:bold;font-size:13px;">Brazzaville</span>
                <br/>
                <span class="">Commune de Brazzaville</span>
                <br/>
                <span class="">Hotel de ville</span>
                <br/>
                <span class=""><u>Centre principal</u></span>
            </td>
            <td style="width: 60%; color: #444444;"></td>

            <td style="width: 40%;"><span style="font-weight:bold;font-size:13px;">REPUBLIQUE DU CONGO</span>
                <br>
                Unité * Travail * Progrès
                <br>
                <img src="{{ URL:: to( 'tools/asset/images/bg-sifec-projet3.png') }}" alt="logo" class="small-img">
            </td>
        </tr>
    </table>
    <br><br>

    <p style="text-align: center">
        <STRONG style="font-size: 16px">
            ACTE DE MARIAGE
        </STRONG>
        <br><br>
        Année:&nbsp;{{ date_create($acte->date_celebration)->format('Y') }}&nbsp;&nbsp;|&nbsp;Registre:&nbsp;{{ $acte->reference }}&nbsp;&nbsp;|&nbsp;Acte N°:&nbsp;{{ $acte->numero_acte }}
        <br>
        Centre d'état civil communal:&nbsp;Centre principal
        <br><br><br>

        {{-- Date de célébration du mariage --}}
        Le quinze décembre deux mil dix-huit*
        <br>
    </p>
    <p>
        {{-- Formule --}}
        par devant nous Marcel NGANONGO Officier de l'Etat Civil ont comparu publiquement:
    </p>

    <table cellspacing="0" style="width: 100%;">
        {{-- Informations du marié --}}
        <tr>
            <td>
                <strong style="padding-left: 30px">M. {{ $acte->nom_epoux }}&nbsp;{{ $acte->prenom_epoux }}*</strong>
                <br>
                Né le:&nbsp;{{ date_create($acte->date_naiss_epoux)->format('d/m/Y') }}&nbsp;&nbsp;à:&nbsp; {{ $acte->lieu_naiss_epoux }}*
                <br>
                Acte de naissance n°:&nbsp;{{ $acte->acte_naiss_epoux }} du 25 avril 1972 dressé à:&nbsp;l'Etat-Civil de Tsiaki*
                <br>
                Nationalité:&nbsp;{{ $acte->nationalite_epoux }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession:&nbsp;{{ $acte->profession_epoux }}*
                <br>
                Domicilié au:&nbsp;{{ $acte->adresse_epoux }}*
                <br>
                Situation matrimoniale:&nbsp;{{ $acte->situation_matrimoniale_epoux }}*
                <br>
                Fille de:&nbsp;{{ $acte->parent1_epoux }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Et de:&nbsp;{{ $acte->parent2_epoux }}*
                <br><br>
            </td>
        </tr>

        <tr><td style="text-align: left">ET</td></tr>

        {{-- Informations de la mariée --}}
        <tr>
            <td>
                <strong style="padding-left: 30px">Mlle {{ $acte->nom_epouse }}&nbsp;{{ $acte->prenom_epouse }}*</strong>
                <br>
                Née le:&nbsp;{{ date_create($acte->date_naiss_epouse)->format('d/m/Y') }}&nbsp;&nbsp;à:&nbsp; {{ $acte->lieu_naiss_epouse }}*
                <br>
                Acte de naissance n°:&nbsp;{{ $acte->acte_naiss_epouse }} du 15 janvier 1980 dressé à:&nbsp;l'Etat-Civil de Tsiaki*
                <br>
                Nationalité:&nbsp;{{ $acte->nationalite_epouse }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession:&nbsp;{{ $acte->profession_epouse }}*
                <br>
                Domiciliée au:&nbsp;{{ $acte->adresse_epouse }}*
                <br>
                Situation matrimoniale:&nbsp;{{ $acte->situation_matrimoniale_epouse }}*
                <br>
                Fils de:&nbsp;{{ $acte->parent1_epouse }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Et de:&nbsp;{{ $acte->parent2_epouse }}*
            </td>
        </tr>

        <tr>
            <td>
                {{-- Stipulations particuliaires --}}
                <p>
                    Sur notre interpelation, les futurs époux ont l'un après l'autre vouloir se prendre pour mari et
                    femme et nous avons prononcé au nom de la Loi qu'ils sont unis par le mariage légal en présence de:
                </p>
                <dl>
                    <dt><strong>Temoins de l'époux</strong></dt>
                    <dd>1.&nbsp;&nbsp;M {{ $acte->nom_temoin1_epoux }},&nbsp;
                        Domicilié au:&nbsp;{{ $acte->domicile_temoin1_epoux }}*
                    </dd>
                    <dd>2.&nbsp;&nbsp;Mme {{ $acte->nom_temoin1_epoux }},&nbsp;née {{ $acte->nom_jeune_fille_temoin2_epoux }}
                        Domiciliée au:&nbsp;{{ $acte->domicile_temoin2_epoux }}*
                    </dd>
                    <br>
                    <dt><strong>Temoins de l'épouse</strong></dt>
                    <dd>1.&nbsp;&nbsp;M {{ $acte->nom_temoin1_epouse }},&nbsp;
                        Domicilié au:&nbsp;{{ $acte->domicile_temoin1_epouse }}*
                    </dd>
                    <dd>2.&nbsp;&nbsp;Mme {{ $acte->nom_temoin1_epouse }},&nbsp;née {{ $acte->nom_jeune_fille_temoin2_epouse }}
                        Domiciliée au:&nbsp;{{ $acte->domicile_temoin2_epouse }}*
                    </dd>
                    qui, l'ecture faite nous avons signé le présent acte avec les époux et les temoins.
                </dl>
            </td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 100%; text-align: center;">
        <tr>
            <td style="text-align: left; width: 50px">
                Epoux
                <br><br><br>
                Les temoins de l'époux
            </td>
            <td style="text-align: left; width: 50px">
                Epouse
                <br><br><br>
                Les temoins de l'épouse
            </td>
        </tr>
    </table>
    <br><br>

    <p style="text-align: center;">L'Officier d'Etat Civil Marcel NGANONGO</p>
    <br><br>

    <table>
    <tr>
        <td>
            <p style="text-align: center;"><strong>CONDITIONS DE MARIAGE</strong></p>
            <p>
                Les futurs époux déclarent expressement opter pour la {{ $acte->option_matrimoniale }}
                et se marier sous le régime de la {{ $acte->regime_matrimonial }}.
                <br>
                La dot:&nbsp;Cinquante mille Francs ({{ $acte->montant_dot }} Frcs) CFA versé à
                {{ $acte->beneficiaire_dot }}, cousin de la mariée*
                <br>
                Coutume présidant à l'union:&nbsp;{{ $acte->coutume_presidant_union }}*
                <br>
                Stipulations particuliares en date du {{ date_create($acte->date_celebration)->format('d/m/Y') }}:&nbsp;
                l'époux déclare expressement le {{ date_create($acte->date_celebration)->format('d/m/Y') }}
                renocé à prendre une seconde épouse tant que le présent mariage n'aura pas été dissout par un jugement
                de divorce ou le décès de son conjoint (Art. 179 du code de la famille).
            </p>
        </td>
    </tr>
</table>


</div>

</body>
</html>