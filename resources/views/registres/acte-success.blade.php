@extends('layouts.layout')

@include('layouts.navigation')
@include('layouts.footer')

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">

        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                        Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                        Registre des mariage <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i> </span>
                        Enregistrement acte...
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
                    <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Nouvel acte de mariage</strong>
                </span>
                </div>

                <div class="col-sm-6">
                    <div class="input-group-btn pull-right">
                        <button type="button" class="btn btn-default btn-md dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">
                            Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#" class="dropdown-item">
                                    <i class="ti-eye"></i>&nbsp;&nbsp;Afficher</a>
                            </li>

                            <li><a href="#" class="dropdown-item">
                                    <i class="ti-pencil-alt"></i>&nbsp;&nbsp;Modifier</a>
                            </li>

                            <li><a href="#" class="dropdown-item" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="ti-plus"></i>&nbsp;&nbsp;Etablir livret de famille</a>
                            </li>

                            <li><a href="#" class="dropdown-item" target="_blank">
                                    <span style="font-size: 16px"><i class="mdi mdi-file-pdf"></i></span>&nbsp;&nbsp;Imprimer acte</a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

            <div class="bgColorSite" style="height:1px;"></div>
            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>

            @if (session()->has('success'))
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="alert alert-icon alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="mdi mdi-check-all"></i>
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <span class="badge badge-warning" style="font-size: 16px">Infos de l'acte de mariage enregistré</span>
                </div>
            </div>

            <div class="lineEspace"></div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="timeline-box" style="padding-left: 20px; padding-bottom: 5px; padding-top: 5px; background-color: #f6f4f2">
                        Acte &nbsp;<strong class="text-danger">N° {{ $data->numero_acte }}</strong><br>
                        Le marié : M. {{ $data->nom_epoux }} {{ $data->prenom_epoux }}<br>
                        La mariée : Mme {{ $data->nom_epoux }} née {{ $data->nom_epouse }} {{ $data->prenom_epouse }}<br>
                    </div>
                </div>
            </div>

            <div class="lineEspace"></div>
            <div class="lineEspace"></div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h5 style="font-family: 'Cambria Math'">Conditions du mariage</h5>
                    <p><i>Les champs précédés de (<strong class="txtColorRed">*</strong>) sont obligatoires</i></p>

                    <div class="panel" style="background-color: #eefad2;">
                        <div class="timeline-box" style="padding-bottom: 20px; padding-top: 20px; padding-right: 10px">

                            <!--Formualaire de creation acte de mariage-->
                            <form class="form-horizontal">
                                {{-- ================ option matrimoniale =======================--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Option matrimoniale:</label>
                                    </div>

                                    <div class="radio radio-success form-check-inline">
                                        @if($data->option_matrimoniale === "monogamie")
                                        <input type="radio" name="option_matrimoniale" checked disabled>
                                        @else
                                            <input type="radio" name="option_matrimoniale" disabled>
                                        @endif
                                        <label for="chkMono" class="txtColorDark txtSizeRegular"> Monogamie </label>
                                    </div>

                                    <div class="radio radio-success form-check-inline ">
                                        @if($data->option_matrimoniale === "polygamie")
                                        <input type="radio" name="option_matrimoniale" checked disabled>
                                        @else
                                            <input type="radio" name="option_matrimoniale" disabled>
                                        @endif

                                        <label for="chkPoly" class="txtColorDark txtSizeRegular"> Polygamie </label>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================= Regime matrimonial =======================--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="regime_id" class="txtLabelForm">Régime matrimonial:</label>
                                    </div>

                                    @if($data->regime_matrimonial !=="séparation des biens")
                                    <div id="dvMono" style="display: block" class="col-sm-6 text-lg-left end">
                                        <select class="form-control" name="regime_matrimonial" disabled>
                                            <option value="">{{ $data->regime_matrimonial }}</option>
                                        </select>

                                    </div>
                                    @else
                                    <div class="col-sm-6 text-lg-left end" id="dvPoly">
                                        <input type="text" name="regime_matrimonial" class="form-control"
                                               value="séparation des biens" disabled="true">
                                    </div>
                                    @endif

                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================== Montant versé a la dot ===================--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="montant_dot" class="txtLabelForm">Montant de la dot (en FCFA):</label>
                                    </div>
                                    <div class="col-sm-4 text-lg-left end">
                                        <input type="number" id="montant_dot" min="50000" name="montant_dot" class="form-control"
                                               value="{{ $data->montant_dot }}" readonly>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================= Beneficiaire de la dot ===================--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="beneficiaire_id" class="txtLabelForm">Bénéficiaire de la dot:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" id="beneficiaire_id" name="beneficiaire_dot" class="form-control"
                                               value="{{ $data->beneficiaire_dot }}" readonly>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================= Qualite du beneficiaire de la dot ========--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="qlite_ben_id" class="txtLabelForm">Qualité du bénéficiaire de la dot:</label>
                                    </div>
                                    <div class="col-sm-6 text-lg-left">
                                        <select id="qlite_ben_id" class="form-control" name="qualite_beneficiaire_dot" disabled>
                                            <option>{{ $data->qualite_beneficiaire_dot }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================= coutume présidant a l'union ============= --}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Coûtume présidant à l'union:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" id="coutume_id" name="coutume_presidant_union" class="form-control  w3-medium"
                                               value="{{ $data->coutume_presidant_union }}" readonly>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{-- ================== Stipulation particuliere ================--}}
                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Stipulations particulières:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <textarea style="" id="sp_id" name="stipulation_particuliaire" readonly
                                                  class="form-control" value="" >
                                            {{ $data->stipulation_particuliaire }}
                                        </textarea>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection

