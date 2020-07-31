

<!DOCTYPE html>
<html>
    <head>
        <title>www.sifec.cg</title>

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
                font-size: 14px;
                font-family: 'Lato', Calibri, Arial, sans-serif;
            }

            .small-img{
                width: 60px;
                height: 50px;
            }
        </style>

    </head>

    <body>

        {{-- En-tete de page --}}
        <table cellspacing="0" style="width: 100%; text-align: center;">
            <tr>
                <td style="width: 40%;">
                    <strong>{{ $centre->commune }}</strong><br/>
                    ---------- <br>
                    SECRETATIAT GENERAL <br>
                    ---------- <br>
                    SERVICE D'ETAT CIVIL COMMUNAL
                </td>
                <td style="width: 60%; color: #444444;"></td>

                <td style="width: 40%;"><span style="font-weight: bold">REPUBLIQUE DU CONGO</span>
                    <br>
                    Unité * Travail * Progrès
                    <br>
                    <img src="{{ URL:: to('tools/asset/images/bg-sifec-projet3.png') }}" alt="logo" class="small-img">
                </td>
            </tr>
        </table>

        <div style="height: 100px"></div>

        <p style="text-align: center"><STRONG style="font-size: 16px">PUBLICATION DU MARIAGE <br>A CELEBRER AU CENTRE D'ETAT CIVIL</STRONG></p>

        <div style="margin: 25px">
            <br><br><br>

            {{-- Formule --}}
            <p>De: la Mairie de Brazzaville <br>
                Le:&nbsp;{{ date_create($declaration->date_celebration)->format('d/m/Y') }}<br>
            </p>

            <P style="text-align: center">ENTRE</P><br>

            {{-- Informations du futur marié --}}
            <p>M.:&nbsp;<strong>{{ $declaration->prenom_epoux }}&nbsp;{{ $declaration->nom_epoux }}</strong><br>
                Né le:&nbsp;{{ $declaration->date_naiss_epoux }}&nbsp;à&nbsp;{{ $declaration->lieu_naiss_epoux }}<br>
                Nationalité:&nbsp;{{ $declaration->nationalite_epoux }}<br>
                Domicilié:&nbsp;{{ $declaration->adresse_epoux }}<br>
                Situation matrimoniale:&nbsp;{{ $declaration->situation_matrimoniale_epoux }}<br>
                Fils de:&nbsp;{{ $declaration->parent1_epoux }}<br>
                Et de:&nbsp;{{ $declaration->parent2_epoux }}<br>
            </p>

            <P style="text-align: center">ET</P><br>

            {{-- Informations de la future mariée --}}
            <p>Mlle:&nbsp;<strong>{{ $declaration->prenom_epouse }}&nbsp;{{ $declaration->nom_epouse }}</strong><br>
                Née le:&nbsp;{{ $declaration->date_naiss_epouse }}&nbsp;à&nbsp;{{ $declaration->lieu_naiss_epouse }}<br>
                Nationalité:&nbsp;{{ $declaration->nationalite_epouse }}<br>
                Domiciliée:&nbsp;{{ $declaration->adresse_epouse }}<br>
                Situation matrimoniale:&nbsp;{{ $declaration->situation_matrimoniale_epouse }}<br>
                Fille de:&nbsp;{{ $declaration->parent1_epouse }}<br>
                Et de:&nbsp;{{ $declaration->parent2_epouse }}
            </p><br><br>

            <p>
                Ladite publication, inscrite d'après le consentement des parties et conformement
                à la loi, sera affichée à l'Etat civil de la Mairie de Brazzaville.<br><br>
            </p><br>

            <table cellspacing="0" style="width: 100%;">
                <tr style="">
                    <td style="width: 30%"></td>
                    <td style="width: 30%"></td>
                    <td style="width: 40%">
                        Brazzaville, le <br><br>
                        Officier de l'Etat civil
                    </td>
                </tr>

            </table>

        </div>

    </body>

</html>