@extends('/layouts/layout1')

{{--@include('/layouts/navigation')--}}

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:90px; padding-bottom:5px; background-color: #FAFAD2">

        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                        Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                        Nouveau livret de famille
                        <?php  if (isset($vue) && $vue=='ajout') { ?>
                        Ajout D&eacute;claration...
                        <?php } ?>

                        <?php  if (isset($vue) && $vue=='liste') { ?>
                        Liste D&eacute;claration...
                        <?php } ?>
                        <?php  if (isset($vue) && ($vue=='detail' || $vue=='modif')) { ?>
                        Modifications / D&eacute;tails...
                        <?php    } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">
        <div class="container-fluid">

            <div class="row" style="padding-bottom:5px;">
                <div class="col-sm-6  txtColorDark txtSizeLarge2 text-left">
                    <span class="badge  badge-success" style="height:19px;">
                        <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Etablissement du livret de famille</strong>
                    </span>
                </div>

            </div>


            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>

            <div class="row">
                {{--===== Formualaire de déclaration de mariage ========--}}
                <div class="col-sm-10">
                    <ul class="nav nav-pills navtab-bg tabs-bordered">
                        <li class="nav-item">
                            <a href="#epoux_id" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                Extrait d'acte de mariage
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#infoComp_id" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Liste des enfants
                            </a>
                        </li>

                    </ul>
                    <br>
                    @if ($message = Session::get('success'))
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="alert alert-icon alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <i class="mdi mdi-check-all"></i>
                                    Votre déclaration de mariage a été enregistrée avec succès.
                                </div>
                            </div>
                        </div>

                    @endif

                    <form class="form-horizontal" method="post" action="">
                        {{ csrf_field() }}

                        <div class="tab-content">

                            {{-- ID du centre connecté --}}
                            <input type="text" name="centre_id" value="{{ $centre->id }}" hidden>

                            {{--============= Information des epoux =================--}}
                            <div class="tab-pane fade show active" id="epoux_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations de l'époux...</u></span>&nbsp
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Noms de l'epoux =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="nom_epoux"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="nom_epoux" id="nom_epoux" class="form-control"
                                               value="{{ old('nom_epoux') }}" readonly>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Prenoms de l'epoux ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="premon_epoux"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_epoux" class="form-control" readonly>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Date de naissance de l'epoux =============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="date_naiss_epoux"><span class="txtColorRed">*</span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_naiss_epoux" class="form-control"
                                                   placeholder="jj/mm/aaaa" id="datepicker-autoclose1" value="" readonly>
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============== lieu de naissance de l'epoux ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="lieu_naiss_epoux"><span class="txtColorRed"></span>&nbsp;Lieu de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="lieu_naiss_epoux" class="form-control" value="" readonly>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Acte de naissance de l'epoux ============-->--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="acte_naiss_epoux"><span class="txtColorRed">*</span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-2 text-lg-left end">
                                        <input type="number" min="1" name="acte_naiss_epoux" class="form-control"
                                               id="acte_naiss_epoux" value="" readonly>
                                    </div>

                                    <div class="col-sm-1 offset-lg-0 text-sm-right">
                                        <label>du</label>
                                    </div>

                                    <div class="col-sm-3 text-sm-left">
                                        <div class="input-group">
                                            <input type="text" name="date_delivrance_acte_naiss_epoux" class="form-control"
                                                   placeholder="jj/mm/aaaa" id="datepicker-autoclose2" value="" readonly="readonly">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label>dressé à:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="lieu_delivrance_acte_naiss_epoux" class="form-control"
                                               value="" readonly>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Nationalite de l'epoux =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="nationalite_epoux"><span class="txtColorRed">*</span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="nationalite_epoux" class="form-control" value="" readonly>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============ profession de l'epoux ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="profession_epoux"><span class="txtColorRed">*</span>&nbsp;Profession:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="profession_epoux" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--======== situation matrimoniale de l'epoux ========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="situation_matrimoniale_epoux"><span class="txtColorRed">*</span>&nbsp;Situation matrimoniale:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="situation_matrimoniale_epoux" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== domicile de l'epoux ================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control">
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms du pere de l'epoux ==========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent1_epoux"><span class="txtColorRed">*</span>&nbsp;Nom du père (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent1_epoux" class="form-control">
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms de la mere de l'epoux ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent2_epoux"><span class="txtColorRed">*</span>&nbsp;Nom de la mère (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent2_epoux" class="form-control" value="">
                                    </div>
                                </div>

                            </div>

                            {{-- ============ Formulaire enfants=========== --}}
                            <div class="tab-pane fade" id="infoComp_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                    <span class="txtColorGrey txtSizeLarge2">
                                        <u>Liste d'enfants du couple marié</u>
                                    </span>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-md-12 txtSizeRegular text-right">
                                        <ul class="btn-group right" style="list-style: none;">
                                            <li>
                                                <a href="" data-toggle="tooltip" data-original-title="Ajouter un enfant...">
                                                    <i class="mdi mdi-plus-circle" style="font-size:40px; color:green">
                                                    </i>
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="m-b-5">
                                            <div class="table-responsive">
                                                <table id="" class="table bordered table-striped w3-card-2" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr class="txtColorBlue">
                                                        <th>#</th>
                                                        <th>N° acte de naissance</th>
                                                        <th>Date délivrance</th>
                                                        <th>Noms et prénoms</th>
                                                        <th>Date naissance</th>
                                                        <th>Sexe</th>
                                                        <th>Naissance à l'étranger transcrite</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="lineEspace"></div>
                        <hr>
                        <div class="lineEspace"></div>

                        <div class="row">
                            <div class="col-sm-8 offset-lg-4 text-lg-left">
                                <button type="submit" class="btn btn-success txtSizeLarge2">Enregistrer&nbsp;
                                    <i class="mdi mdi-content-save"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- Fin du formulaire de declaration de mariage-->
                </div>

                {{-- Information du centre d'etat civil connecté --}}
                <div class="col-lg-2">
                    <div style="border-left:#006633 solid 0.5px; padding-left:20px; margin-top:30px;">

                        <div class="txtSizeMedium txtColorGrey text-left" style="padding-top:10px;">
                            <strong>...</strong>
                        </div>
                        <div class="txtSizeRegular txtColorGrey" style="padding-bottom:5px;">
                        </div>
                        <span class="badge badge-warning">Info Centre</span><br>
                        <span class="txtSizeRegular txtColorGrey">Libellé centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">
                        {{ $centre->designation }} - {{ $centre->commune }}
                    </span>

                        <div style="height:10px;"></div>

                        <span class="txtSizeRegular txtColorGrey">Type centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">Etat-civil</span>

                        <div style="height:10px;"></div>

                        <span class="txtSizeRegular txtColorGrey">Dégré centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">
                        @if($centre->category == 'A')
                                Centre Principal
                            @else
                                Centre secondaire
                            @endif
                    </span>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
