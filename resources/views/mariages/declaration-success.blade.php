@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                </span>Nouvelle déclaration de mariage
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">
        <div class="container-fluid">

            <div class="row" style="padding-bottom:5px;">
                <div class="col-sm-6  txtColorDark txtSizeLarge2 text-left">
                <span class="badge  badge-success" style="height:19px;">
                    <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Nouvelle déclaration de mariage</strong>
                </span>
                </div>

                <div class="col-sm-6 txtSizeRegular text-right">
                    <ul class="btn-group right" style="list-style: none;">
                        <li style="padding-left:20px;" class="txtSizeRegular txtColorDark">
                            <a href="{{ route('declaration.list') }}">
                                <i class="mdi mdi-file-document-box" style="font-size:30px; color:green"></i>Liste des déclarations...
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            {{--<div class="bgColorSite" style="height:1px;"></div>--}}
            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>

            @if (session()->has('success'))
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="alert alert-icon alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="mdi mdi-check-all"></i>
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @elseif (session()->has('whoops'))
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="alert alert-icon alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="mdi mdi-block-helper"></i>
                            <strong>Echec d'enregistrement ! </strong>{{ session('whoops') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                {{--===== Formualaire de déclaration de mariage ========--}}
                <div class="col-sm-12">
                    <ul class="nav nav-pills navtab-bg tabs-bordered">
                        <li class="nav-item">
                            <a href="#epoux_id" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                Informations époux
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#epouse_id" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Informations  épouse
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#temoins_epoux_id" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                Témoins époux
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#temoins_epouse_id" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                Témoins épouse
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#infoComp_id" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Infos complémentaires
                            </a>
                        </li>

                    </ul>

                    <form class="form-horizontal" method="post" action="{{ route('declaration.save') }}">
                        {{ csrf_field() }}

                        <div class="tab-content" style="">

                            {{--============= Formulaire epoux =================--}}
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
                                        <label for="nom_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="nom_epoux" id="nom_epoux"
                                               class="form-control {{ $errors->has('nom_epoux') ? 'is-invalid' : '' }}"
                                               onblur="textUpperCase(this);" value="{{ old('nom_epoux') }}">
                                        {!! $errors->first('nom_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Prenoms de l'epoux ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="premon_epoux" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_epoux" id="prenom_epoux"
                                               class="form-control {{ $errors->has('prenom_epoux') ? 'is-invalid' : '' }}"
                                               onblur="firstCharUpperCase(this);"value="{{ old('prenom_epoux') }}" >
                                        {!! $errors->first('prenom_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- Date de naissancce epoux -->
                                {{--=============== Date de naissance de l'epoux =============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="date_naiss_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_naiss_epoux" placeholder="jj/mm/aaaa" id="datepicker-autoclose1"
                                                   class="form-control {{ $errors->has('date_naiss_epoux') ? 'is-invalid' : '' }}"
                                                   value="{{ old('date_naiss_epoux') }}">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                            {!! $errors->first('date_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============== lieu de naissance de l'epoux ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="lieu_naiss_epoux" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Lieu de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="lieu_naiss_epoux" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Acte de naissance de l'epoux ============-->--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="acte_naiss_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-2 text-lg-left end">
                                        <input type="number" min="1" name="acte_naiss_epoux" class="form-control" id="acte_naiss_epoux">
                                    </div>

                                    <p class="txtLabelForm">du:</p>

                                    <div class="col-sm-3 text-sm-left">
                                        <div class="input-group">
                                            <input type="text" name="date_delivrance_acte_naiss_epoux" placeholder="jj/mm/aaaa" id="datepicker-autoclose2"
                                                   class="form-control {{ $errors->has('date_delivrance_acte_naiss_epoux') ? 'is-invalid' : '' }}"
                                                   value="{{ old('date_delivrance_acte_naiss_epoux') }}">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                            {!! $errors->first('date_delivrance_acte_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 text-lg-right end">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Etat civil de délivrance:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select type="text" name="designation" class="form-control">
                                            <option value="">---</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Nationalite de l'epoux =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="nationalite_epoux" class="form-control">
                                            <option value="Congolaise">Congolaise (Congo-Brazzaville)</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============ profession de l'epoux ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="profession_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Profession:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="profession_epoux" class="form-control">
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--======== situation matrimoniale de l'epoux ========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="situation_matrimoniale_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Situation matrimoniale:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="situation_matrimoniale_epoux" id="" class="form-control">
                                            <option value="">---</option>
                                            <option value="Pré-marié">Pré-marié</option>
                                            <option value="en concubinage">En concubinage</option>
                                            <option value="Autre">Autre</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== domicile de l'epoux ================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms du pere de l'epoux ==========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent1_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom du père (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent1_epoux" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms de la mere de l'epoux ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent2_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de la mère (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent2_epoux" class="form-control" value="">
                                    </div>

                                </div>

                            </div>

                            {{--============= Formulaire epouse ================--}}
                            <div class="tab-pane fade" id="epouse_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations de l'épouse...</u></span>&nbsp
                                    </div>
                                </div>
                                <div class="lineEspace"></div>
                                <!-- Noms epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="nom_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="nom_epouse"
                                               class="form-control {{ $errors->has('nom_epouse') ? 'is-invalid' : '' }}"
                                               onblur="textUpperCase(this);" value="{{ old('nom_epouse') }}">
                                        {!! $errors->first('nom_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <!-- prenoms de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="premon_epouse" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_epouse"
                                               class="form-control {{ $errors->has('prenom_epouse') ? 'is-invalid' : '' }}"
                                               onblur="firstCharUpperCase(this)" value="{{ old('prenom_epouse') }}">
                                        {!! $errors->first('prenom_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <!-- date de naissance de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="date_naiss_epouse" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_naiss_epouse" class="form-control" placeholder="jj/mm/aaaa"
                                                   value="" id="datepicker-autoclose3">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <!-- lieu de naissance de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="lieu_naiss_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Lieu de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="lieu_naiss_epouse" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- Acte de naissance de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="acte_naiss_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-2 text-lg-left end">
                                        <input type="number" min="1" name="acte_naiss_epouse" class="form-control">
                                    </div>

                                    <p>du:</p>

                                    <div class="col-sm-3 text-sm-left">
                                        <div class="input-group">
                                            <input type="text" name="date_delivrance_acte_naiss_epouse" class="form-control" placeholder="jj/mm/aaaa"
                                                   id="datepicker-autoclose4">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 text-lg-right end">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Etat civil de délivrance:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select class="form-control" name="lieu_delivrance_acte_naiss_epouse" onchange="getLieu(this);">
                                            <option value="">---</option>

                                        </select>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- nationalite de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="nationalite_epouse" class="form-control">
                                            <option></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <!-- profession de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="profession_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Profession:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="profession_epouse" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- situation matrimoniale de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="situation_matrimoniale_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Situation matrimoniale:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="situation_matrimoniale_epoux" id="" class="form-control">
                                            <option value="">---</option>
                                            <option value="Pré-marié">Pré-marié</option>
                                            <option value="en concubinage">En concubinage</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- domicile de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="adresse_epouse" class="form-control">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- noms et prenoms du pere de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent1_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom du père (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent1_epouse" class="form-control" value="">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- noms et prenoms de la mere de l'epouse -->
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent2_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de la mère (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent2_epouse" class="form-control">
                                    </div>

                                </div>

                            </div>

                            <!-- Formulaire temoins epoux -->
                            <div class="tab-pane fade" id="temoins_epoux_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                    <span class="txtColorGreen txtSizeLarge2">
                                        Informations sur l'acte de mariage des temoins du futur marié
                                    </span>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label>Mariage contracté à l'étranger:</label>
                                    </div>
                                    <div class="checkbox checkbox-success form-check-inline col-sm-3">
                                        <input type="checkbox" id="checkID"  name="fil" onclick="infoActeTemoins(this, infoAct1)">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div id="infoAct1">
                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;N° acte de mariage:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="number" min="1" name="numero_acte" class="form-control">
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Référence registre:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="text" name="reference" class="form-control">
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Lieu de publication:</label>
                                        </div>

                                        <div class="col-sm-4 text-lg-left">
                                            <select class="form-control" name="lieu_delivrance_acte_naiss_epoux" onchange="getLieu(this);">
                                                <option value="">---</option>
                                                @foreach($allCentres as $centre)
                                                    <option value="{{ $centre->designation }}">{{ $centre->designation }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Année:</label>
                                        </div>

                                        <div class="col-sm-1 text-lg-left">
                                            <select class="form-control" name="lieu_delivrance_acte_naiss_epoux" onchange="getLieu(this);">
                                                <option value="">---</option>
                                                @foreach($years as $y)
                                                    <option value="{{ $y }}">{{ $y }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="lineEspace"></div> -->

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-3 text-lg-left">
                                        <h4 class="font-14 mt-4">Epoux </h4>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="nom_temoin1_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="prenom_temoin1_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="profession_temoin1_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="domicile_temoin1_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="lineEspace"></div> -->

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-3 text-lg-left">
                                        <h4 class="font-14 mt-4">Epouse </h4>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de jeune fille de l'épouse:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="nom_jeune_fille_temoin2_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="profession_temoin2_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="domicile_temoin2_epoux" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                            </div>

                            <!-- Formulaire temoins epouse -->
                            <div class="tab-pane fade" id="temoins_epouse_id">

                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                    <span class="txtColorGreen txtSizeLarge2">
                                        Informations sur l'acte de mariage des temoins de la future mariée
                                    </span>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label>Mariage contracté à l'étranger:</label>
                                    </div>
                                    <div class="checkbox checkbox-success form-check-inline col-sm-3">
                                        <input type="checkbox" id="checkID2"  name="fil" onclick="infoActeTemoins(this, infoAct2)">
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div id="infoAct2">
                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;N° acte de mariage:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="number" min="1" name="numero_acte" class="form-control">
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Référence registre:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="text" name="reference" class="form-control">
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Lieu de publication:</label>
                                        </div>

                                        <div class="col-sm-4 text-lg-left">
                                            <select class="form-control" name="lieu_delivrance_acte_naiss_epoux" onchange="getLieu(this);">
                                                <option value="">---</option>
                                                @foreach($allCentres as $centre)
                                                    <option value="{{ $centre->designation }}">{{ $centre->designation }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Année:</label>
                                        </div>

                                        <div class="col-sm-1 text-lg-left">
                                            <select class="form-control" name="lieu_delivrance_acte_naiss_epoux" onchange="getLieu(this);">
                                                <option value="">---</option>
                                                @foreach($years as $y)
                                                    <option value="{{ $y }}">{{ $y }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <!-- <div class="lineEspace"></div> -->

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-3 text-lg-left">
                                        <h4 class="font-14 mt-4">Epoux </h4>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="nom_temoin1_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="prenom_temoin1_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="profession_temoin1_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="domicile_temoin1_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="lineEspace"></div> -->

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-3 text-lg-left">
                                        <h4 class="font-14 mt-4">Epouse </h4>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de jeune fille de l'épouse:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="nom_jeune_fille_temoin2_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="profession_temoin2_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="domicile_temoin2_epouse" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>


                            </div>

                            {{-- ============ Formulaire info complementaires=========== --}}
                            <div class="tab-pane fade" id="infoComp_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                    <span class="txtColorGrey txtSizeLarge2">
                                        <u>Informations complémentaires pour la publication du mariage</u>
                                    </span>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Filiation:</label>
                                    </div>

                                    <div class="checkbox checkbox-success form-check-inline">
                                        <input type="checkbox" id="checkID"  name="fil" onclick="display()">
                                    </div>

                                    <div class="col-sm-6 text-lg-left" id="filID" style="display: none">
                                        <select class="form-control" name="filiation">
                                            <option value="">---</option>
                                            <option value="">Frère et soeure</option>
                                            <option value="">Cousin et cousine</option>
                                            <option value="">Autres</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <!-- date de célébration -->
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="date_celebration" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Date de célébration du mariage:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_celebration" class="form-control" placeholder="jj/mm/aaaa" value=""
                                                   id="datepicker-autoclose6">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- Heure de celebration --}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="heure_celebration" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Heure de célébration du mariage:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="heure_celebration" class="form-control" id="clockpicker">
                                            <span class="input-group-addon bg-success b-0">
                                            <i class="mdi mdi-clock text-white"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- Lieu de celebration --}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Lieu de célébration du mariage:</label>
                                    </div>

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <select name="lieu_celebration"
                                                class="form-control {{ $errors->has('lieu_celebration') ? 'is-invalid' : '' }}">
                                            <option value="">---</option>
                                            @foreach($centres as $etatCivil)
                                                <option value="{{ $etatCivil->designation }} - {{ $etatCivil->locality }}">
                                                    {{ $etatCivil->designation }} - {{ $etatCivil->locality }}
                                                </option>
                                            @endforeach
                                            <option value="domicile de l'époux">Domicile époux</option>
                                            <option value="domicile de l'épouse">Domicile épouse</option>

                                        </select>
                                        {!! $errors->first('lieu_celebration', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div style="height: 50px"></div>

                        <div class="row">
                            <div class="col-sm-4 offset-lg-4">
                                <button type="submit" class="btn btn-success txtSizeLarge2">Enregistrer&nbsp;
                                    <i class="mdi mdi-content-save"></i>
                                </button>

                                <button type="reset" class="btn btn-default txtSizeLarge2" onclick="cancelDec();">Annuler&nbsp;
                                    <i class="mdi mdi-refresh"></i>
                                </button>

                            </div>
                        </div>

                    </form>
                    <!-- Fin du formulaire de declaration de mariage-->

                </div>
            </div>
            <div class="lineEspace"></div>
            <hr>

            {{-- Information du centre d'etat civil connecté --}}
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <span class="badge badge-warning">Info Centre</span><br>
                    <p style="border-left:#d7dfbc solid 0.5px; padding-left: 10px">

                        <span class="txtSizeRegular txtColorGrey">Libellé centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">{{ $centre->designation }}</span><br>
                        <span class="txtSizeRegular txtColorGrey">Département:</span>
                        <span class="txtSizeRegular txtColorBlack">&nbsp;{{ $centre->locality }}</span><br>

                        <span class="txtSizeRegular txtColorGrey">Type centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">Centre d'Etat civil</span><br>

                        <span class="txtSizeRegular txtColorGrey">Dégré centre:&nbsp;</span>
                        <span class="txtSizeRegular txtColorBlack">
                        @if($centre->category == 'A')
                                Centre Principal
                            @else
                                Centre secondaire
                            @endif

                     </span>
                    </p>

                </div>
            </div>

        </div>
    </div>
@endsection
