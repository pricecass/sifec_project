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

            <div class="col-sm-6  txtSizeRegular text-right">

                <ul class="btn-group right" style="list-style: none;">
                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark">
                        <a href="#"><i class=" mdi mdi-plus-circle" style="font-size:30px; color:green"></i></a>
                        <a href="{{ route('register.show') }}">Consulter le registre&nbsp;&nbsp;</a>
                    </li>

                    @if (session()->has('success'))
                        <li>
                            <div class="input-group-btn pull-right">
                                <button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">
                                    Actions <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('acte.show', session('mariage_id')) }}" class="dropdown-item">
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
                        </li>
                    @endif

                </ul>

            </div>
        </div>

        <div class="bgColorSite" style="height:1px;"></div>
        <div class="bgOblicLigne1" style="height:6px;"></div>
        <div class="lineEspace"></div>

        @if (session()->has('whoops'))
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
        @endif


        @if (session()->has('success'))
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <span class="badge badge-warning" style="font-size: 16px">Infos de l'acte de mariage enregistré</span>
            </div>
        </div>
        <div class="lineEspace"></div>
        @endif

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="timeline-box txtColorGreenDark" style="font-weight:bold; padding-left: 20px; padding-bottom: 5px; padding-top: 5px; background-color: #dfe1ea">
                    @if (session()->has('success'))
                    Acte &nbsp;<strong class="text-danger">N° {{ session('acte_num') }}</strong><br>
                    @else
                        Enregistrement de l'acte de mariage entre
                    @endif
                    M. {{ $declaration->nom_epoux }} {{ $declaration->prenom_epoux }} et
                    Mlle {{ $declaration->nom_epouse }} {{ $declaration->prenom_epouse }}<br>
                </div>
            </div>
        </div>
        {{--@else--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-10 offset-md-1">--}}
                    {{--<div class="timeline-box txtColorGreenDark" style="padding-left: 20px; padding-bottom: 5px; padding-top: 5px; background-color: #f6f4f2">--}}
                        {{----}}
                        {{--M. <strong>{{ $declaration->nom_epoux }} {{ $declaration->prenom_epoux }}</strong> et--}}
                        {{--Mlle <strong>{{ $declaration->nom_epouse }} {{ $declaration->prenom_epouse }}</strong>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}

        <div class="lineEspace"></div>
        <div class="lineEspace"></div>

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h5 style="font-family: 'Cambria Math'">Conditions du mariage</h5>
                <p><i>Les champs précédés de (<strong class="txtColorRed">*</strong>) sont obligatoires</i></p>

                    <div class="timeline-box" style="padding-bottom: 20px; padding-top: 20px; padding-right: 10px">

                        <!--Formualaire de creation acte de mariage-->
                        <form class="form-horizontal" method="post" action="{{ route('mariage.save') }}">
                        {!! csrf_field() !!}

                        {{--================== id de la declaration =====================--}}
                        <input type="text" value="{{ $declaration->id }}" name="declaration_id" hidden>

                        {{--================== id du registre ==========================--}}
                        <input type="text" value="{{ $register->id }}" name="registre_id" hidden>

                        {{--================== id du user ==========================--}}
                        <input type="text" value="{{ Auth::user()->id }}" name="user_id" hidden>

                        {{--================== id acte de mariage =====================--}}
                        <input type="text" value="{{ date('Y').'/EC'.$centre->id.'/'.$register->reference.'/'.$declaration->id }}"
                               name="numero_acte" hidden>

                        {{-- ================ option matrimoniale =======================--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label class="txtLabelForm"><span class="txtColorRed">*</span > Option matrimoniale:</label>
                            </div>

                            <div class="radio radio-success form-check-inline">
                                <input type="radio" id="chkMono" name="option_matrimoniale" onclick="regime();"
                                       value="monogamie" {{ old('option_matrimoniale') == 'monogamie'? 'checked': '' }}
                                       @if(session()->has('success')) disabled @endif >

                                <label for="chkMono" class="txtColorDark txtSizeRegular"> Monogamie </label>
                            </div>

                            <div class="radio radio-success form-check-inline ">
                                <input type="radio" id="chkPoly" name="option_matrimoniale" onclick="regime();"
                                       value="polygamie" {{ old('option_matrimoniale') == 'polygamie'? 'checked': '' }}
                                       @if(session()->has('success')) disabled @endif >

                                <label for="chkPoly" class="txtColorDark txtSizeRegular"> Polygamie </label>
                            </div>

                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================= Regime matrimonial =======================--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label class="txtLabelForm"><span class="txtColorRed">*</span >&nbsp;Régime matrimonial:</label>
                            </div>

                            <div id="divRegime" class="col-sm-6 text-lg-left end">
                                <select name="regime_matrimonial"
                                        class="form-control {{ $errors->has('regime_matrimonial') ? 'is-invalid' : '' }}"
                                    @if(session()->has('success')) disabled @endif >

                                    @if(session()->has('success') )
                                        <option>{{old('regime_matrimonial')}}</option>
                                    @endif
                                    <option value="">---</option>
                                    <option value="communauté commune des biens">Communauté commune des biens</option>
                                    <option value="séparation des biens">Séparation des biens</option>
                                    <option value="communauté réduite aux acquets">Communauté réduite aux acquets</option>
                                </select>

                                {!! $errors->first('regime_matrimonial', '<div class="invalid-feedback">:message</div>') !!}
                            </div>

                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================== Montant versé a la dot ===================--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label for="montant_dot" class="txtLabelForm">Montant de la dot (en FCFA):</label>
                            </div>

                            <div class="col-sm-4 text-lg-left end">
                                <input type="number" id="montant_dot" min="50000" name="montant_dot"
                                       class="form-control {{ $errors->has('montant_dot') ? 'is-invalid' : '' }}"
                                       value="{{ old('montant_dot') }}"
                                       @if(session()->has('success')) readonly @endif >

                                {!! $errors->first('montant_dot', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================= Beneficiaire de la dot ===================--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label for="beneficiaire_id" class="txtLabelForm">Bénéficiaire de la dot:</label>
                            </div>

                            <div class="col-sm-6 text-lg-left end">
                                <input type="text" id="beneficiaire_id" name="beneficiaire_dot"
                                       class="form-control {{ $errors->has('beneficiaire_dot') ? 'is-invalid' : '' }}"
                                       value="{{ old('beneficiaire_dot') }}"
                                       @if(session()->has('success')) readonly @endif >

                                {!! $errors->first('beneficiaire_dot', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================= Qualite du beneficiaire de la dot ========--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label for="qlite_ben_id" class="txtLabelForm">Qualité du bénéficiaire de la dot:</label>
                            </div>
                            <div class="col-sm-6 text-lg-left">
                                <select id="qlite_ben_id"  name="qualite_beneficiaire_dot"
                                        class="form-control {{ $errors->has('qualite_beneficiaire_dot') ? 'is-invalid' : '' }}"
                                        @if(session()->has('success')) disabled @endif >

                                    @if(session()->has('success'))
                                        <option>{{ old('qualite_beneficiaire_dot') }}</option>
                                    @endif
                                    <option value="">---</option>
                                    <option value="pere_mariee">Père de la mariée</option>
                                    <option value="oncle_mariee">Oncle de la mariée</option>
                                    <option value="frere_mariee">Frère de la mariée</option>
                                    <option value="cousin_mariee">Cousin de la mariée</option>
                                    <option value="grand-père_mariee">Grand-père de la mariée</option>
                                    <option value="autres">Autres</option>
                                </select>

                                {!! $errors->first('qualite_beneficiaire_dot', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================= coutume présidant a l'union ============= --}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Coûtume présidant à l'union:</label>
                            </div>

                            <div class="col-sm-6 text-lg-left end">
                                <input type="text" id="coutume_id" name="coutume_presidant_union"
                                       class="form-control {{ $errors->has('coutume_presidant_union') ? 'is-invalid' : '' }}"
                                       value="{{ old('coutume_presidant_union') }}"
                                       @if(session()->has('success')) readonly @endif >

                                {!! $errors->first('coutume_presidant_union', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="lineEspace"></div>

                        {{-- ================== Stipulation particuliere ================--}}
                        <div class="row">
                            <div class="col-sm-4 offset-lg-0 text-lg-right">
                                <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Stipulations particulières:</label>
                            </div>

                            <div class="col-sm-6 text-lg-left end">
                                <textarea style="" id="sp_id" name="stipulation_particuliaire"
                                          class="form-control {{ $errors->has('coutume_presidant_union') ? 'is-invalid' : '' }}"
                                          @if(session()->has('success')) readonly @endif>
                                    {{ old('stipulation_particuliaire') }}
                                </textarea>

                                {!! $errors->first('coutume_presidant_union', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                            <div class="lineEspace"></div>

                        @if(!session()->has('success'))
                        <div class="lineEspace"></div>

                        <div class="row">
                            <div class="col-sm-8 offset-lg-4 text-lg-left">
                                <button type="submit" class="btn btn-success txtSizeLarge2">Enregistrer &nbsp;<i class="mdi mdi-content-save "></i>
                                </button>
                            </div>
                        </div>
                        @endif

                    </form>

                </div>

            </div>
        </div>

    </div>

</div>

@endsection

