@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')

@section('content')

<div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Mariages <span class="txtColorGrey">
                        <i class="ti-angle-double-right txtColorRed"></i>
                    </span>Registre des mariages
                    <span class="txtColorGrey">
                        <i class="ti-angle-double-right txtColorRed"></i>
                    </span>Acte de mariage
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper"  style="background-color: white;">
    <div class="container-fluid">

        <div class="row" style="padding-bottom:5px;">
            <div class="col-sm-6 txtSizeMedium txtColorDark text-left">
                <strong>
                    <span class="txtColorGreenDark">Détails de l'acte de mariage n°
                        <strong style="color: red">{{ $acteMariage->numero_acte }}</strong>
                    </span>
                </strong>
            </div>

            <div class="col-sm-6 txtSizeRegular text-right">
                <ul class="btn-group right" style="list-style: none;">

                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark">
                        <a href="{{ route('acte-mariage.pdf', $acteMariage->id) }}" target="_blank">
                            <i class="fa fa-print" style="font-size:30px; color:green"></i>
                            Imprimer l'acte...
                        </a>
                    </li>

                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark">
                        <a href="{{ route('livret-create', $acteMariage->id) }}">
                            <i class="mdi mdi-pencil-box-outline" style="font-size:30px; color:green"></i>
                            Etablir livret de famille
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bgColorSite" style="height:1px;"></div>
        <div class="bgOblicLigne1" style="height:6px;"></div>
        <br>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="timeline-box txtColorGreenDark" style="font-weight:bold; padding-left: 20px; padding-bottom: 5px; padding-top: 5px; background-color: #dfe1ea">
                    Acte de mariage &nbsp;<strong class="text-danger">N° {{ $acteMariage->numero_acte }}</strong><br>
                    Année : {{ date_create($acteMariage->date_celebration)->format('Y') }}
                    | Registre : {{ $acteMariage->reference }}

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="timeline-box w3-text-black" style="padding-left: 20px; padding-right: 20px; padding-bottom: 20px; padding-top: 20px; background-color: #f3f3f37a">

                    <span style="font-weight: bold; font-size: 18px">Informations de l'époux</span>
                    <hr>
                    <p>
                        <span class="txtLabelForm"> Noms et prénoms : </span><strong>{{ $acteMariage->nom_epoux }} {{ $acteMariage->prenom_epoux }}</strong>
                        <br>
                        <span class="txtLabelForm"> Date de naissance : </span>{{ date_create($acteMariage->date_naiss_epoux)->format('d/m/Y') }}
                        <br>
                        <span class="txtLabelForm"> Lieu de naissance : </span>
                        <br>
                        <span class="txtLabelForm"> Acte de naissance : </span>{{ $acteMariage->acte_naiss_epoux }} du {{ date_create($acteMariage->date_delivrance_acte_naiss_epoux)->format('d/m/Y') }}
                        dressé à l'{{ $acteMariage->lieu_delivrance_acte_naiss_epoux }}
                        <br>

                        <span class="txtLabelForm"> Nationalité : </span>{{ $acteMariage->nationalite_epoux }}
                        <br>
                        <span class="txtLabelForm"> Profession : </span>{{ $acteMariage->profession_epoux }}
                        <br>
                        <span class="txtLabelForm"> Domicile/Résidence : </span>{{ $acteMariage->adresse_epoux }}
                        <br>
                        <span class="txtLabelForm"> Situation matrimoniale : </span>{{ $acteMariage->situation_matrimoniale_epoux }}
                        <br>
                        <span class="txtLabelForm"> Nom du père : </span>{{ $acteMariage->parent1_epouse }}
                        <br>
                        <span class="txtLabelForm"> Nom de la mère : </span>{{ $acteMariage->parent2_epoux }}
                        <br>
                        <span class="txtLabelForm"> Témoins du mariage </span>
                        <dl>
                            <dt><strong>Temoins de l'époux</strong></dt>
                            <dd>1.&nbsp;&nbsp;M {{ $acteMariage->nom_temoin1_epoux }} {{ $acteMariage->prenom_temoin1_epoux }},&nbsp;
                                domicilié à:&nbsp;{{ $acteMariage->domicile_temoin1_epoux }}
                            </dd>
                            <dd>2.&nbsp;&nbsp;Mme {{ $acteMariage->nom_temoin1_epoux }},&nbsp;née {{ $acteMariage->nom_jeune_fille_temoin2_epoux }}
                                domiciliée à:&nbsp;{{ $acteMariage->domicile_temoin2_epoux }}
                            </dd>
                        </dl>

                    </p>
                    <br>

                    <span style="font-weight: bold; font-size: 18px">Informations de l'épouse</span>
                    <hr>
                    <p>
                        <span class="txtLabelForm"> Noms et prénoms : </span><strong>{{ $acteMariage->nom_epouse }} {{ $acteMariage->prenom_epouse }}</strong>
                        <br>
                        <span class="txtLabelForm"> Date de naissance : </span>{{ date_create($acteMariage->date_naiss_epouse)->format('d/m/Y') }}
                        <br>
                        <span class="txtLabelForm"> Lieu de naissance : </span>
                        <br>
                        <span class="txtLabelForm"> Acte de naissance : </span>{{ $acteMariage->acte_naiss_epouse }} du {{ date_create($acteMariage->date_delivrance_acte_naiss_epouse)->format('d/m/Y') }}
                        dressé à l'{{ $acteMariage->lieu_delivrance_acte_naiss_epouse }}
                        <br>

                        <span class="txtLabelForm"> Nationalité : </span>{{ $acteMariage->nationalite_epouse }}
                        <br>
                        <span class="txtLabelForm"> Profession : </span>{{ $acteMariage->profession_epouse }}
                        <br>
                        <span class="txtLabelForm"> Domicile/Résidence : </span>{{ $acteMariage->adresse_epouse }}
                        <br>
                        <span class="txtLabelForm"> Situation matrimoniale : </span>{{ $acteMariage->situation_matrimoniale_epouse }}
                        <br>
                        <span class="txtLabelForm"> Nom du père : </span>{{ $acteMariage->parent1_epouse }}
                        <br>
                        <span class="txtLabelForm"> Nom de la mère : </span>{{ $acteMariage->parent2_epouse }}
                        <br>
                        <dl>
                            <dt><strong>Temoins de l'époux</strong></dt>
                            <dd>1.&nbsp;&nbsp;M {{ $acteMariage->nom_temoin1_epouse }} {{ $acteMariage->prenom_temoin1_epouse }},&nbsp;
                                domicilié à:&nbsp;{{ $acteMariage->domicile_temoin1_epouse }}
                            </dd>
                            <dd>2.&nbsp;&nbsp;Mme {{ $acteMariage->nom_temoin1_epouse }},&nbsp;née {{ $acteMariage->nom_jeune_fille_temoin2_epouse }}
                                domiciliée à:&nbsp;{{ $acteMariage->domicile_temoin2_epouse }}
                            </dd>
                        </dl>
                    </p>
                    <br>

                    <span style="font-weight: bold; font-size: 18px">Conditions du mariage</span>
                    <hr>
                    <span class="txtLabelForm"> Option matrimoniale : </span>{{ $acteMariage->option_matrimoniale }}
                    <br>
                    <span class="txtLabelForm"> Régime matrimonial : </span>{{ $acteMariage->regime_matrimonial }}
                    <br>
                    <span class="txtLabelForm"> Montant de la dot : </span> <span style="background: #cc931e">{{ $acteMariage->montant_dot }}</span> FCFA, versé à {{ $acteMariage->beneficiaire_dot }}
                    ({{ $acteMariage->qualite_beneficiaire_dot }})
                    <br>
                    <span class="txtLabelForm"> Coûtume présidant à l'union : </span>{{ $acteMariage->coutume_presidant_union }}
                    <br>
                    <span class="txtLabelForm"> Stipulations particulières : </span>{{ $acteMariage->stipulation_particuliaire }}

                </div>
            </div>
        </div>


    </div>
</div>

@endsection
