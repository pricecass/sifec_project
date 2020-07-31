
@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">

        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                        Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                        Déclarations des mariages
                        <span class="txtColorGrey">
                            <i class="ti-angle-double-right txtColorRed"></i>
                        </span>Déclaration
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">

        <div class="container-fluid">
            <div class="row" style="padding-bottom:5px;">
                <div class="col-sm-6 txtSizeLarge txtColorDark text-left">
                    <strong>
                        <span class="txtColorGreenDark">
                            Détails de la déclaration de mariage N° {{ $declaration->id }}
                        </span>
                    </strong>
                </div>

                <div class="col-sm-6">
                    <div class="input-group-btn pull-right">
                        <button type="button" class="btn btn-default btn-md dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">
                            Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('declaration.edit', $declaration->id) }}" class="dropdown-item">
                                    <i class="ti-pencil-alt"></i>&nbsp;&nbsp;Modifier</a>
                            </li>

                            <li><a href="#" class="dropdown-item" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="ti-plus"></i>&nbsp;&nbsp;Ajouter une opposition</a>
                            </li>

                            <li><a href="{{ route('publication.pdf', $declaration->id) }}" class="dropdown-item" target="_blank">
                                    <span style="font-size: 16px"><i class="mdi mdi-file-pdf"></i></span>&nbsp;&nbsp;Générer une publication</a>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

            <div class="bgColorSite" style="height:1px;"></div>
            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>

            <div class="row">
                <div class="col-md-11 offset-md-1">
                    <p class="text-danger" style="font-size: larger">Déclaration N° {{ $declaration->id }} ({{ $declaration->status }})</p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="timeline-box txtColorGreenDark" style="font-weight:bold; padding-left: 20px; padding-bottom: 5px; padding-top: 5px; background-color: #dfe1ea; border: 1px solid #2E8B57; border-left: 7px solid #2E8B57; border-radius: 4px;">
                        Déclaration de mariage &nbsp;<strong class="text-danger">N° </strong><br>
                        Année : {{ date_create($declaration->date_celebration)->format('Y') }}

                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="timeline-box w3-text-black" style="padding-left: 20px; padding-right: 20px; padding-bottom: 20px; padding-top: 20px; background-color: #f3f3f37a; border: 1px solid #2E8B57; border-left: 7px solid #2E8B57; border-radius: 4px;">

                        <span style="font-weight: bold; font-size: 18px">Informations de l'époux</span>
                        <hr>

                        <div class="row w3-text-black">
                            <div class="col-sm-3 offset-lg-0 text-lg-right">
                                <span class="txtLabelForm"> Noms et prénoms : </span>
                                <br>
                                <span class="txtLabelForm"> Date de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Lieu de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Acte de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Nationalité : </span>
                                <br>
                                <span class="txtLabelForm"> Profession : </span>
                                <br>
                                <span class="txtLabelForm"> Adresse : </span>
                                <br>
                                <span class="txtLabelForm"> Situation matrimoniale : </span>
                                <br>
                                <span class="txtLabelForm"> Nom du père : </span>
                                <br>
                                <span class="txtLabelForm"> Nom de la mère : </span>

                            </div>

                            <div class="col-sm-9 text-lg-left end">
                                <strong>{{ $declaration->nom_epoux }} {{ $declaration->prenom_epoux }}</strong>
                                <br>
                                {{ date_create($declaration->date_naiss_epoux)->format('d/m/Y') }}
                                <br>
                                {{ $declaration->lieu_naiss_epoux }}
                                <br>
                                <strong class="text-danger">N° {{ $declaration->acte_naiss_epoux }}</strong> du
                                {{ date_create($declaration->date_delivrance_acte_naiss_epoux)->format('d/m/Y') }}
                                - {{ $declaration->lieu_delivrance_acte_naiss_epoux }}
                                <br>
                                {{ $declaration->nationalite_epoux }}
                                <br>
                                {{ $declaration->profession_epoux }}
                                <br>
                                {{ $declaration->adresse_epoux }}
                                <br>
                                {{ $declaration->situation_matrimoniale_epoux }}
                                <br>
                                {{ $declaration->parent1_epoux }}
                                <br>
                                {{ $declaration->parent2_epoux }}

                            </div>

                        </div>
                        <br><br>

                        <h2 class="badge badge-warning">Temoins du mariage</h2>
                        <div class="row">

                            <div class="col-md-9 offset-md-1">
                                <dl>
                                    <dd>1.&nbsp;&nbsp;M {{ $declaration->nom_temoin1_epoux }} {{ $declaration->prenom_temoin1_epoux }},&nbsp;
                                        domicilié à:&nbsp;{{ $declaration->domicile_temoin1_epoux }}
                                    </dd>
                                    <dd>2.&nbsp;&nbsp;Mme {{ $declaration->nom_temoin1_epoux }},&nbsp;née {{ $declaration->nom_jeune_fille_temoin2_epoux }}
                                        domiciliée à:&nbsp;{{ $declaration->domicile_temoin2_epoux }}
                                    </dd>
                                </dl>
                            </div>

                        </div>
                        <br><br>

                        <span style="font-weight: bold; font-size: 18px">Informations de l'épouse</span>
                        <hr>

                        <div class="row w3-text-black">
                            <div class="col-sm-3 offset-lg-0 text-lg-right">
                                <span class="txtLabelForm"> Noms et prénoms : </span>
                                <br>
                                <span class="txtLabelForm"> Date de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Lieu de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Acte de naissance : </span>
                                <br>
                                <span class="txtLabelForm"> Nationalité : </span>
                                <br>
                                <span class="txtLabelForm"> Profession : </span>
                                <br>
                                <span class="txtLabelForm"> Adresse : </span>
                                <br>
                                <span class="txtLabelForm"> Situation matrimoniale : </span>
                                <br>
                                <span class="txtLabelForm"> Nom du père : </span>
                                <br>
                                <span class="txtLabelForm"> Nom de la mère : </span>

                            </div>

                            <div class="col-sm-9 text-lg-left end">
                                <strong>{{ $declaration->nom_epouse }} {{ $declaration->prenom_epouse }}</strong>
                                <br>
                                {{ date_create($declaration->date_naiss_epouse)->format('d/m/Y') }}
                                <br>
                                {{ $declaration->lieu_naiss_epouse }}
                                <br>
                                <strong class="text-danger">N° {{ $declaration->acte_naiss_epouse }}</strong> du
                                {{ date_create($declaration->date_delivrance_acte_naiss_epouse)->format('d/m/Y') }}
                                - {{ $declaration->lieu_delivrance_acte_naiss_epouse }}
                                <br>
                                {{ $declaration->nationalite_epouse }}
                                <br>
                                {{ $declaration->profession_epouse }}
                                <br>
                                {{ $declaration->adresse_epouse }}
                                <br>
                                {{ $declaration->situation_matrimoniale_epouse }}
                                <br>
                                {{ $declaration->parent1_epouse }}
                                <br>
                                {{ $declaration->parent2_epouse }}

                            </div>

                        </div>
                        <br>
                        <h2 class="badge badge-warning">Temoins du mariage</h2>
                        <div class="row">

                            <div class="col-md-9 offset-md-1">
                                <dl>
                                    <dd>1.&nbsp;&nbsp;M {{ $declaration->nom_temoin1_epoux }} {{ $declaration->prenom_temoin1_epoux }},&nbsp;
                                        domicilié à:&nbsp;{{ $declaration->domicile_temoin1_epoux }}
                                    </dd>
                                    <dd>2.&nbsp;&nbsp;Mme {{ $declaration->nom_temoin1_epoux }},&nbsp;née {{ $declaration->nom_jeune_fille_temoin2_epoux }}
                                        domiciliée à:&nbsp;{{ $declaration->domicile_temoin2_epoux }}
                                    </dd>
                                </dl>
                            </div>

                        </div>
                        <br><br>

                        <span style="font-weight: bold; font-size: 18px">Informations complémentaires</span>
                        <hr>

                        <span class="txtLabelForm"> Date de publication : </span>{{ date_create($declaration->created_at)->format('d/m/Y H:i:s') }}
                        <br>
                        <span class="txtLabelForm"> Lieu de célébration : </span>{{ $declaration->lieu_celebration }}
                        <br>
                        <span class="txtLabelForm"> Date de célébration : </span>{{ date_create($declaration->date_celebration)->format('d/m/Y') }}
                        <br>
                        <span class="txtLabelForm"> Heure de célébration : </span>{{ $declaration->heure_celebration }}
                        <br>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Enregistrement d'une opposition </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" action="{{ route('opposition.store') }}">
                                {{ csrf_field() }}

                                <input type="text" value="{{ $declaration->id }}" name="declaration_id" hidden>

                                <div class="form-group">
                                    <label class="col-md-4 col-form-label">Noms *</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nom_opp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-form-label">Prénoms *</label>
                                    <div class="col-md-12">
                                        <input type="text" name="prenom_opp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-form-label">Adresse *</label>
                                    <div class="col-md-12">
                                        <input type="text" name="adresse_opp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-form-label">Téléphone *</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tel_opp" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-form-label">Qualité *</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="qualite_opp" id="">
                                            <option value="">...</option>
                                            <option value="Le Ministère Public">Le Ministère Public</option>
                                            <option value="Père de l'épouse">Père de l'épouse</option>
                                            <option value="Mère de l'épouse">Mère de l'épouse</option>
                                            <option value="Père de l'époux">Père de l'époux</option>
                                            <option value="Mère de l'époux">Mère de l'époux</option>
                                            <option value="autres">Atres</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 col-form-label">Motif *</label>
                                    <div class="col-md-12">
                                        <textarea style="height: 125px" name="motif_opp" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Enregistrer</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

