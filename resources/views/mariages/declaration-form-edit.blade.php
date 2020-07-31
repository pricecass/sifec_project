@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')

@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                </span>Modification déclaration
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">
        <div class="container-fluid">

            <div class="row" style="padding-bottom:5px;">
                <div class="col-sm-6  txtColorDark txtSizeLarge2 text-left">
                <span class="badge  badge-success" style="height:19px;">
                    <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Modification déclaration</strong>
                </span>
                </div>

                <div class="col-sm-6 txtSizeRegular text-right">

                    <ul class="btn-group right" style="list-style: none;">
                        <li style="padding-left:20px;" class="txtSizeRegular txtColorDark"><a href="{{ route('declaration.list') }}">
                                <i class="mdi mdi-file-document-box" style="font-size:30px; color:green"></i></a> <a href="{{ route('declaration.list') }}">Lister des déclarations...
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

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

                    <form class="form-horizontal" method="POST" action="{{ route('declaration.update', $declaration->id) }}">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="tab-content" style="">
                            {{-- ID du centre connecté --}}
                            <input type="text" name="centre_id" value="{{ $centre->id }}" hidden>

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
                                               onblur="textUpperCase(this);" value="{{ $edit ? $declaration->nom_epoux : old('nom_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

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
                                               onblur="firstCharUpperCase(this);" value="{{ $edit ? $declaration->prenom_epoux : old('prenom_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('prenom_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Date de naissance de l'epoux =============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="date_naiss_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_naiss_epoux" placeholder="jj/mm/aaaa" id="datepicker-autoclose1"
                                                   class="form-control {{ $errors->has('date_naiss_epoux') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? date_create($declaration->date_naiss_epoux)->format('d/m/Y') :
                                                   old('date_naiss_epoux') }}"
                                                   @if(session()->has('success') ) disabled @endif >

                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                            {{--{!! $errors->first('date_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}--}}
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
                                        <input type="text" name="lieu_naiss_epoux"
                                               class="form-control {{ $errors->has('lieu_naiss_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->lieu_naiss_epoux : old('lieu_naiss_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('lieu_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Acte de naissance de l'epoux ============-->--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="acte_naiss_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-2 text-lg-left end">
                                        <input type="number" min="1" name="acte_naiss_epoux"
                                               class="form-control  {{ $errors->has('acte_naiss_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->acte_naiss_epoux : old('acte_naiss_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif>
                                        {!! $errors->first('acte_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                    <p class="txtLabelForm">du:</p>

                                    <div class="col-sm-3 text-sm-left">
                                        <div class="input-group">
                                            <input type="text" name="date_delivrance_acte_naiss_epoux" placeholder="jj/mm/aaaa" id="datepicker-autoclose2"
                                                   class="form-control {{ $errors->has('date_delivrance_acte_naiss_epoux') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? date_create($declaration->date_delivrance_acte_naiss_epoux)->format('d/m/Y') :
                                                   old('date_delivrance_acte_naiss_epoux') }}"
                                                   @if(session()->has('success') ) disabled @endif >
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>

                                        {!! $errors->first('date_delivrance_acte_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 text-lg-right end">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Etat civil de délivrance:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="lieu_delivrance_acte_naiss_epoux"
                                                class="form-control {{ $errors->has('lieu_delivrance_acte_naiss_epoux') ? 'is-invalid' : '' }}"
                                                @if(session()->has('success') ) disabled @endif >

                                            <option value="">{{ $declaration->lieu_delivrance_acte_naiss_epoux }}</option>

                                            @foreach($allCentres as $etatCivil)
                                                <option value="{{$etatCivil->designation}}" {{ (old('lieu_delivrance_acte_naiss_epoux') == $etatCivil->designation)? 'selected':'' }}>
                                                    {{ $etatCivil->designation }} - {{ $etatCivil->locality }}
                                                </option>
                                            @endforeach

                                        </select>
                                        {!! $errors->first('lieu_delivrance_acte_naiss_epoux', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Nationalite de l'epoux =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="nationalite_epoux" class="form-control" @if(session()->has('success')) disabled @endif >
                                            @if(session()->has('success') )
                                                <option>{{old('nationalite_epoux')}}</option>
                                            @endif

                                            <option value="">
                                                {{ $declaration->nationalite_epoux != null ? $declaration->nationalite_epoux: '---'}}
                                            </option>

                                            <option value="Congolaise">Congolaise (Congo-Brazzaville)</option>
                                            <option value="Afghane">Afghane (Afghanistan)</option>
                                            <option value="Albanaise">Albanaise (Albanie)</option>
                                            <option value="Algérienne">Algérienne (Algérie)</option>
                                            <option value="Allemande">Allemande (Allemagne)</option>
                                            <option value="Americaine">Americaine (États-Unis)</option>
                                            <option value="Andorrane">Andorrane (Andorre)</option>
                                            <option value="Angolaise">Angolaise (Angola)</option>
                                            <option value="Antiguaise-et-Barbudienne">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                            <option value="Argentine">Argentine (Argentine)</option>
                                            <option value="Armenienne">Armenienne (Arménie)</option>
                                            <option value="Australienne">Australienne (Australie)</option>
                                            <option value="Autrichienne">Autrichienne (Autriche)</option>
                                            <option value="Azerbaïdjanaise">Azerbaïdjanaise (Azerbaïdjan)</option>
                                            <option value="Bahamienne">Bahamienne (Bahamas)</option>
                                            <option value="Bahreinienne ">Bahreinienne (Bahreïn)</option>
                                            <option value="Bangladaise">Bangladaise (Bangladesh)</option>
                                            <option value="Barbadienne">Barbadienne (Barbade)</option>
                                            <option value="Belge">Belge (Belgique)</option>
                                            <option value="Belizienne">Belizienne (Belize)</option>
                                            <option value="Béninoise">Béninoise (Bénin)</option>
                                            <option value="Bhoutanaise ">Bhoutanaise (Bhoutan)</option>
                                            <option value="Biélorusse">Biélorusse (Biélorussie)</option>
                                            <option value="Birmane">Birmane (Birmanie)</option>
                                            <option value="Bissau-Guinéenne">Bissau-Guinéenne (Guinée-Bissau)</option>
                                            <option value="Bolivienne">Bolivienne (Bolivie)</option>
                                            <option value="Bosnienne">Bosnienne (Bosnie-Herzégovine)</option>
                                            <option value="Botswanaise">Botswanaise (Botswana)</option>
                                            <option value="Brésilienne">Brésilienne (Brésil)</option>
                                            <option value="Britannique">Britannique (Royaume-Uni)</option>
                                            <option value="Brunéienne">Brunéienne (Brunéi)</option>
                                            <option value="Bulgare">Bulgare (Bulgarie)</option>
                                            <option value="Burkinabée">Burkinabée (Burkina)</option>
                                            <option value="Burundaise">Burundaise (Burundi)</option>
                                            <option value="Cambodgienne">Cambodgienne (Cambodge)</option>
                                            <option value="Camerounaise">Camerounaise (Cameroun)</option>
                                            <option value="Canadienne">Canadienne (Canada)</option>
                                            <option value="Cap-verdienne">Cap-verdienne (Cap-Vert)</option>
                                            <option value="Centrafricaine">Centrafricaine (Centrafrique)</option>
                                            <option value="Chilienne">Chilienne (Chili)</option>
                                            <option value="Chinoise">Chinoise (Chine)</option>
                                            <option value="Chypriote">Chypriote (Chypre)</option>
                                            <option value="Colombienne">Colombienne (Colombie)</option>
                                            <option value="Comorienne ">Comorienne (Comores)</option>
                                            <option value="Congolaise">Congolaise (Congo-Brazzaville)</option>
                                            <option value="Congolaise">Congolaise (Congo-Kinshasa)</option>
                                            <option value="Cookienne">Cookienne (Îles Cook)</option>
                                            <option value="Costaricaine">Costaricaine (Costa Rica)</option>
                                            <option value="Croate">Croate (Croatie)</option>
                                            <option value="Cubaine">Cubaine (Cuba)</option>
                                            <option value="Danoise">Danoise (Danemark)</option>
                                            <option value="Djiboutienne">Djiboutienne (Djibouti)</option>
                                            <option value="Dominicaine">Dominicaine (République dominicaine)</option>
                                            <option value="Dominiquaise">Dominiquaise (Dominique)</option>
                                            <option value="Égyptienne">Égyptienne (Égypte)</option>
                                            <option value="Émirienne">Émirienne (Émirats arabes unis)</option>
                                            <option value="Équato-guineenne">Équato-guineenne (Guinée équatoriale)</option>
                                            <option value="Équatorienne">Équatorienne (Équateur)</option>
                                            <option value="Érythréenne">Érythréenne (Érythrée)</option>
                                            <option value="Espagnole">Espagnole (Espagne)</option>
                                            <option value="Est-timoraise">Est-timoraise (Timor-Leste)</option>
                                            <option value="Estonienne">Estonienne (Estonie)</option>
                                            <option value="Éthiopienne">Éthiopienne (Éthiopie)</option>
                                            <option value="Fidjienne">Fidjienne (Fidji)</option>
                                            <option value="Finlandaise">Finlandaise (Finlande)</option>
                                            <option value="Française">Française (France)</option>
                                            <option value="Gabonaise">Gabonaise (Gabon)</option>
                                            <option value="Gambienne">Gambienne (Gambie)</option>
                                            <option value="eorgienne">Georgienne (Géorgie)</option>
                                            <option value="Ghanéenne">Ghanéenne (Ghana)</option>
                                            <option value="Grenadienne">Grenadienne (Grenade)</option>
                                            <option value="Guatémaltèque">Guatémaltèque (Guatemala)</option>
                                            <option value="Guinéenne">Guinéenne (Guinée)</option>
                                            <option value="Guyanienne">Guyanienne (Guyana)</option>
                                            <option value="Haïtienne">Haïtienne (Haïti)</option>
                                            <option value="Hellénique">Hellénique (Grèce)</option>
                                            <option value="Hondurienne">Hondurienne (Honduras)</option>
                                            <option value="Hongroise">Hongroise (Hongrie)</option>
                                            <option value="Indienne">Indienne (Inde)</option>
                                            <option value="Indonésienne">Indonésienne (Indonésie)</option>
                                            <option value="Irakienne">Irakienne (Iraq)</option>
                                            <option value="Iranienne">Iranienne (Iran)</option>
                                            <option value="Irlandaise">Irlandaise (Irlande)</option>
                                            <option value="Islandaise">Islandaise (Islande)</option>
                                            <option value="Israélienne">Israélienne (Israël)</option>
                                            <option value="Italienne">Italienne (Italie)</option>
                                            <option value="Ivoirienne">Ivoirienne (Côte d'Ivoire)</option>
                                            <option value="Jamaïcaine">Jamaïcaine (Jamaïque)</option>
                                            <option value="Japonaise">Japonaise (Japon)</option>
                                            <option value="Jordanienne">Jordanienne (Jordanie)</option>
                                            <option value="Kazakhstanaise">Kazakhstanaise (Kazakhstan)</option>
                                            <option value="Kenyane">Kenyane (Kenya)</option>
                                            <option value="Kirghize">Kirghize (Kirghizistan)</option>
                                            <option value="Kiribatienne">Kiribatienne (Kiribati)</option>
                                            <option value="Kittitienne">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                                            <option value="Koweïtienne">Koweïtienne (Koweït)</option>
                                            <option value="Laotienne">Laotienne (Laos)</option>
                                            <option value="Lesothane">Lesothane (Lesotho)</option>
                                            <option value="Lettone">Lettone (Lettonie)</option>
                                            <option value="Libanaise">Libanaise (Liban)</option>
                                            <option value="Libérienne">Libérienne (Libéria)</option>
                                            <option value="Libyenne">Libyenne (Libye)</option>
                                            <option value="Liechtensteinoise">Liechtensteinoise (Liechtenstein)</option>
                                            <option value="Lituanienne">Lituanienne (Lituanie)</option>
                                            <option value="Luxembourgeoise">Luxembourgeoise (Luxembourg)</option>
                                            <option value="Macédonienne">Macédonienne (Macédoine)</option>
                                            <option value="Malaisienne">Malaisienne (Malaisie)</option>
                                            <option value="Malawienne ">Malawienne (Malawi)</option>
                                            <option value="Maldivienne">Maldivienne (Maldives)</option>
                                            <option value="Malgache">Malgache (Madagascar)</option>
                                            <option value="Maliennes">Maliennes (Mali)</option>
                                            <option value="Maltaise">Maltaise (Malte)</option>
                                            <option value="Marocaine">Marocaine (Maroc)</option>
                                            <option value="Marshallaise">Marshallaise (Îles Marshall)</option>
                                            <option value="Mauricienne">Mauricienne (Maurice)</option>
                                            <option value="Mauritanienne">Mauritanienne (Mauritanie)</option>
                                            <option value="Mexicaine">Mexicaine (Mexique)</option>
                                            <option value="Micronésienne">Micronésienne (Micronésie)</option>
                                            <option value="Moldave">Moldave (Moldovie)</option>
                                            <option value="Monegasque">Monegasque (Monaco)</option>
                                            <option value="Mongole">Mongole (Mongolie)</option>
                                            <option value="Monténégrine">Monténégrine (Monténégro)</option>
                                            <option value="Mozambicaine">Mozambicaine (Mozambique)</option>
                                            <option value="Namibienne">Namibienne (Namibie)</option>
                                            <option value="Nauruane">Nauruane (Nauru)</option>
                                            <option value="Néerlandaise">Néerlandaise (Pays-Bas)</option>
                                            <option value="Néo-Zélandaise">Néo-Zélandaise (Nouvelle-Zélande)</option>
                                            <option value="Népalaise">Népalaise (Népal)</option>
                                            <option value="Nicaraguayenne">Nicaraguayenne (Nicaragua)</option>
                                            <option value="Nigériane">Nigériane (Nigéria)</option>
                                            <option value="Nigérienne">Nigérienne (Niger)</option>
                                            <option value="Niuéenne">Niuéenne (Niue)</option>
                                            <option value="Nord-coréenne">Nord-coréenne (Corée du Nord)</option>
                                            <option value="Norvégienne">Norvégienne (Norvège)</option>
                                            <option value="Omanaise">Omanaise (Oman)</option>
                                            <option value="Ougandaise">Ougandaise (Ouganda)</option>
                                            <option value="Ouzbéke">Ouzbéke (Ouzbékistan)</option>
                                            <option value="Pakistanaise">Pakistanaise (Pakistan)</option>
                                            <option value="Palaosienne">Palaosienne (Palaos)</option>
                                            <option value="Palestinienne">Palestinienne (Palestine)</option>
                                            <option value="Panaméenne">Panaméenne (Panama)</option>
                                            <option value="apouane-Néo-Guinéenne">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                            <option value="Paraguayenne">Paraguayenne (Paraguay)</option>
                                            <option value="Péruvienne">Péruvienne (Pérou)</option>
                                            <option value="Philippine">Philippine (Philippines)</option>
                                            <option value="Polonaise">Polonaise (Pologne)</option>
                                            <option value="Portugaise">Portugaise (Portugal)</option>
                                            <option value="Qatarienne">Qatarienne (Qatar)</option>
                                            <option value="Roumaine">Roumaine (Roumanie)</option>
                                            <option value="Russe">Russe (Russie)</option>
                                            <option value="Rwandaise">Rwandaise (Rwanda)</option>
                                            <option value="Saint-Lucienne">Saint-Lucienne (Sainte-Lucie)</option>
                                            <option value="Saint-Marinaise">Saint-Marinaise (Saint-Marin)</option>
                                            <option value="Saint-Vincentaise et Grenadine">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                            <option value="Salomonaise">Salomonaise (Îles Salomon)</option>
                                            <option value="Salvadorienne">Salvadorienne (Salvador)</option>
                                            <option value="Samoane">Samoane (Samoa)</option>
                                            <option value="Santoméenne">Santoméenne (Sao Tomé-et-Principe)</option>
                                            <option value="Saoudienne">Saoudienne (Arabie saoudite)</option>
                                            <option value="Sénégalaise">Sénégalaise (Sénégal)</option>
                                            <option value="Serbe">Serbe (Serbie)</option>
                                            <option value="eychelloise">Seychelloise (Seychelles)</option>
                                            <option value="Sierra-Léonaise">Sierra-Léonaise (Sierra Leone)</option>
                                            <option value="Slovaque">c(Singapour)</option>
                                            <option value="Slovaque">Slovaque (Slovaquie)</option>
                                            <option value="Slovène">Slovène (Slovénie)</option>
                                            <option value="Somalienne">Somalienne (Somalie)</option>
                                            <option value="Soudanaise">Soudanaise (Soudan)</option>
                                            <option value="Sri-Lankaise">Sri-Lankaise (Sri Lanka)</option>
                                            <option value="Sud-Africaine">Sud-Africaine (Afrique du Sud)</option>
                                            <option value="Sud-Coréenne">Sud-Coréenne (Corée du Sud)</option>
                                            <option value="Sud-Soudanaise">Sud-Soudanaise (Soudan du Sud)</option>
                                            <option value="Suédoise">Suédoise (Suède)</option>
                                            <option value="Suisse">Suisse (Suisse)</option>
                                            <option value="Surinamaise">Surinamaise (Suriname)</option>
                                            <option value="Swazie">Swazie (Swaziland)</option>
                                            <option value="Syrienne">Syrienne (Syrie)</option>
                                            <option value="Tadjike ">Tadjike (Tadjikistan)</option>
                                            <option value="Tanzanienne">Tanzanienne (Tanzanie)</option>
                                            <option value="Tchadienne">Tchadienne (Tchad)</option>
                                            <option value="Tchèque">Tchèque (Tchéquie)</option>
                                            <option value="Thaïlandaise">Thaïlandaise (Thaïlande)</option>
                                            <option value="Togolaise">Togolaise (Togo)</option>
                                            <option value="Tonguienne">Tonguienne (Tonga)</option>
                                            <option value="Trinidadienne">Trinidadienne (Trinité-et-Tobago)</option>
                                            <option value="Tunisienne">Tunisienne (Tunisie)</option>
                                            <option value="Turkmène">Turkmène (Turkménistan)</option>
                                            <option value="Turque">Turque (Turquie)</option>
                                            <option value="Tuvaluane">Tuvaluane (Tuvalu)</option>
                                            <option value="Ukrainienne">Ukrainienne (Ukraine)</option>
                                            <option value="Uruguayenne">Uruguayenne (Uruguay)</option>
                                            <option value="Vanuatuane">Vanuatuane (Vanuatu)</option>
                                            <option value="Vaticane">Vaticane (Vatican)</option>
                                            <option value="Vénézuélienne">Vénézuélienne (Venezuela)</option>
                                            <option value="Vietnamienne">Vietnamienne (Viêt Nam)</option>
                                            <option value="Yéménite">Yéménite (Yémen)</option>
                                            <option value="Zambienne">Zambienne (Zambie)</option>
                                            <option value="Zimbabwéenne">Zimbabwéenne (Zimbabwe)</option>
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
                                        <input type="text" name="profession_epoux" class="form-control {{ $errors->has('profession_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_epoux : old('profession_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--======== situation matrimoniale de l'epoux ========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="situation_matrimoniale_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Situation matrimoniale:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="situation_matrimoniale_epoux"
                                                class="form-control {{ $errors->has('situation_matrimoniale_epoux') ? 'is-invalid' : '' }}"
                                                @if(session()->has('success')) disabled @endif >

                                            @if(session()->has('success'))
                                                <option>{{old('situation_matrimoniale_epoux')}}</option>
                                            @endif
                                            <option value="">{{ $declaration->situation_matrimoniale_epoux }}</option>
                                            <option value="Pré-marié">Pré-marié</option>
                                            <option value="Célibataire">Célibataire</option>
                                            <option value="Divorcé">Divorcé</option>
                                            <option value="Veuf">Veuf</option>
                                        </select>

                                        {!! $errors->first('situation_matrimoniale_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== domicile de l'epoux ================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control {{ $errors->has('adresse_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->adresse_epoux : old('adresse_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('adresse_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms du pere de l'epoux ==========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent1_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom du père (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent1_epoux" class="form-control {{ $errors->has('parent1_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->parent1_epoux : old('parent1_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('parent1_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms de la mere de l'epoux ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent2_epoux" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de la mère (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent2_epoux" class="form-control {{ $errors->has('parent2_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->parent2_epoux : old('parent2_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('parent2_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>

                            </div>

                            {{--============= Formulaire epouse ================--}}
                            <div class="tab-pane fade" id="epouse_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations de l'époux...</u></span>&nbsp
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Noms de l'epouse =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="nom_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="nom_epouse" id="nom_epouse"
                                               class="form-control {{ $errors->has('nom_epouse') ? 'is-invalid' : '' }}"
                                               onblur="textUpperCase(this);" value="{{ $edit ? $declaration->nom_epouse : old('nom_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('nom_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Prenoms de l'epouse ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="premon_epouse" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_epouse" id="prenom_epouse"
                                               class="form-control {{ $errors->has('prenom_epouse') ? 'is-invalid' : '' }}"
                                               onblur="firstCharUpperCase(this);" value="{{ $edit ? $declaration->prenom_epouse : old('prenom_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('prenom_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== Date de naissance de l'epouse =============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="date_naiss_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <div class="input-group">
                                            <input type="text" name="date_naiss_epouse" placeholder="jj/mm/aaaa" id="datepicker-autoclose3"
                                                   class="form-control {{ $errors->has('date_naiss_epouse') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? date_create($declaration->date_naiss_epouse)->format('d/m/Y') :
                                                   old('date_naiss_epouse') }}"
                                                   @if(session()->has('success') ) disabled @endif >

                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                            {{--{!! $errors->first('date_naiss_epouse', '<div class="invalid-feedback">:message</div>') !!}--}}
                                        </div>

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============== lieu de naissance de l'epouse ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="lieu_naiss_epouse" class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Lieu de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="lieu_naiss_epouse"
                                               class="form-control {{ $errors->has('lieu_naiss_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->lieu_naiss_epouse : old('lieu_naiss_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('lieu_naiss_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Acte de naissance de l'epouse ============-->--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="acte_naiss_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-2 text-lg-left end">
                                        <input type="number" min="1" name="acte_naiss_epouse"
                                               class="form-control  {{ $errors->has('acte_naiss_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->acte_naiss_epouse : old('acte_naiss_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif>
                                        {!! $errors->first('acte_naiss_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                    <p class="txtLabelForm">du:</p>

                                    <div class="col-sm-3 text-sm-left">
                                        <div class="input-group">
                                            <input type="text" name="date_delivrance_acte_naiss_epouse" placeholder="jj/mm/aaaa" id="datepicker-autoclose4"
                                                   class="form-control {{ $errors->has('date_delivrance_acte_naiss_epouse') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? date_create($declaration->date_delivrance_acte_naiss_epouse)->format('d/m/Y') :
                                                   old('date_delivrance_acte_naiss_epouse') }}"
                                                   @if(session()->has('success') ) disabled @endif >
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>

                                        {!! $errors->first('date_delivrance_acte_naiss_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 text-lg-right end">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Etat civil de délivrance:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="lieu_delivrance_acte_naiss_epouse"
                                                class="form-control {{ $errors->has('lieu_delivrance_acte_naiss_epouse') ? 'is-invalid' : '' }}"
                                                @if(session()->has('success') ) disabled @endif >

                                            <option value="">{{ $declaration->lieu_delivrance_acte_naiss_epouse }}</option>

                                            @foreach($allCentres as $etatCivil)
                                                <option value="{{$etatCivil->designation}}" {{ (old('lieu_delivrance_acte_naiss_epouse') == $etatCivil->designation)? 'selected':'' }}>
                                                    {{ $etatCivil->designation }} - {{ $etatCivil->locality }}
                                                </option>
                                            @endforeach

                                        </select>
                                        {!! $errors->first('lieu_delivrance_acte_naiss_epouse', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=========== Nationalite de l'epouse =====================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="nationalite_epouse" class="form-control" @if(session()->has('success')) disabled @endif >
                                            @if(session()->has('success') )
                                                <option>{{old('nationalite_epouse')}}</option>
                                            @endif

                                            <option value="">{{ $declaration->nationalite_epouse }}</option>

                                            <option value="Congolaise">Congolaise (Congo-Brazzaville)</option>
                                            <option value="Afghane">Afghane (Afghanistan)</option>
                                            <option value="Albanaise">Albanaise (Albanie)</option>
                                            <option value="Algérienne">Algérienne (Algérie)</option>
                                            <option value="Allemande">Allemande (Allemagne)</option>
                                            <option value="Americaine">Americaine (États-Unis)</option>
                                            <option value="Andorrane">Andorrane (Andorre)</option>
                                            <option value="Angolaise">Angolaise (Angola)</option>
                                            <option value="Antiguaise-et-Barbudienne">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                            <option value="Argentine">Argentine (Argentine)</option>
                                            <option value="Armenienne">Armenienne (Arménie)</option>
                                            <option value="Australienne">Australienne (Australie)</option>
                                            <option value="Autrichienne">Autrichienne (Autriche)</option>
                                            <option value="Azerbaïdjanaise">Azerbaïdjanaise (Azerbaïdjan)</option>
                                            <option value="Bahamienne">Bahamienne (Bahamas)</option>
                                            <option value="Bahreinienne ">Bahreinienne (Bahreïn)</option>
                                            <option value="Bangladaise">Bangladaise (Bangladesh)</option>
                                            <option value="Barbadienne">Barbadienne (Barbade)</option>
                                            <option value="Belge">Belge (Belgique)</option>
                                            <option value="Belizienne">Belizienne (Belize)</option>
                                            <option value="Béninoise">Béninoise (Bénin)</option>
                                            <option value="Bhoutanaise ">Bhoutanaise (Bhoutan)</option>
                                            <option value="Biélorusse">Biélorusse (Biélorussie)</option>
                                            <option value="Birmane">Birmane (Birmanie)</option>
                                            <option value="Bissau-Guinéenne">Bissau-Guinéenne (Guinée-Bissau)</option>
                                            <option value="Bolivienne">Bolivienne (Bolivie)</option>
                                            <option value="Bosnienne">Bosnienne (Bosnie-Herzégovine)</option>
                                            <option value="Botswanaise">Botswanaise (Botswana)</option>
                                            <option value="Brésilienne">Brésilienne (Brésil)</option>
                                            <option value="Britannique">Britannique (Royaume-Uni)</option>
                                            <option value="Brunéienne">Brunéienne (Brunéi)</option>
                                            <option value="Bulgare">Bulgare (Bulgarie)</option>
                                            <option value="Burkinabée">Burkinabée (Burkina)</option>
                                            <option value="Burundaise">Burundaise (Burundi)</option>
                                            <option value="Cambodgienne">Cambodgienne (Cambodge)</option>
                                            <option value="Camerounaise">Camerounaise (Cameroun)</option>
                                            <option value="Canadienne">Canadienne (Canada)</option>
                                            <option value="Cap-verdienne">Cap-verdienne (Cap-Vert)</option>
                                            <option value="Centrafricaine">Centrafricaine (Centrafrique)</option>
                                            <option value="Chilienne">Chilienne (Chili)</option>
                                            <option value="Chinoise">Chinoise (Chine)</option>
                                            <option value="Chypriote">Chypriote (Chypre)</option>
                                            <option value="Colombienne">Colombienne (Colombie)</option>
                                            <option value="Comorienne ">Comorienne (Comores)</option>
                                            <option value="Congolaise">Congolaise (Congo-Brazzaville)</option>
                                            <option value="Congolaise">Congolaise (Congo-Kinshasa)</option>
                                            <option value="Cookienne">Cookienne (Îles Cook)</option>
                                            <option value="Costaricaine">Costaricaine (Costa Rica)</option>
                                            <option value="Croate">Croate (Croatie)</option>
                                            <option value="Cubaine">Cubaine (Cuba)</option>
                                            <option value="Danoise">Danoise (Danemark)</option>
                                            <option value="Djiboutienne">Djiboutienne (Djibouti)</option>
                                            <option value="Dominicaine">Dominicaine (République dominicaine)</option>
                                            <option value="Dominiquaise">Dominiquaise (Dominique)</option>
                                            <option value="Égyptienne">Égyptienne (Égypte)</option>
                                            <option value="Émirienne">Émirienne (Émirats arabes unis)</option>
                                            <option value="Équato-guineenne">Équato-guineenne (Guinée équatoriale)</option>
                                            <option value="Équatorienne">Équatorienne (Équateur)</option>
                                            <option value="Érythréenne">Érythréenne (Érythrée)</option>
                                            <option value="Espagnole">Espagnole (Espagne)</option>
                                            <option value="Est-timoraise">Est-timoraise (Timor-Leste)</option>
                                            <option value="Estonienne">Estonienne (Estonie)</option>
                                            <option value="Éthiopienne">Éthiopienne (Éthiopie)</option>
                                            <option value="Fidjienne">Fidjienne (Fidji)</option>
                                            <option value="Finlandaise">Finlandaise (Finlande)</option>
                                            <option value="Française">Française (France)</option>
                                            <option value="Gabonaise">Gabonaise (Gabon)</option>
                                            <option value="Gambienne">Gambienne (Gambie)</option>
                                            <option value="eorgienne">Georgienne (Géorgie)</option>
                                            <option value="Ghanéenne">Ghanéenne (Ghana)</option>
                                            <option value="Grenadienne">Grenadienne (Grenade)</option>
                                            <option value="Guatémaltèque">Guatémaltèque (Guatemala)</option>
                                            <option value="Guinéenne">Guinéenne (Guinée)</option>
                                            <option value="Guyanienne">Guyanienne (Guyana)</option>
                                            <option value="Haïtienne">Haïtienne (Haïti)</option>
                                            <option value="Hellénique">Hellénique (Grèce)</option>
                                            <option value="Hondurienne">Hondurienne (Honduras)</option>
                                            <option value="Hongroise">Hongroise (Hongrie)</option>
                                            <option value="Indienne">Indienne (Inde)</option>
                                            <option value="Indonésienne">Indonésienne (Indonésie)</option>
                                            <option value="Irakienne">Irakienne (Iraq)</option>
                                            <option value="Iranienne">Iranienne (Iran)</option>
                                            <option value="Irlandaise">Irlandaise (Irlande)</option>
                                            <option value="Islandaise">Islandaise (Islande)</option>
                                            <option value="Israélienne">Israélienne (Israël)</option>
                                            <option value="Italienne">Italienne (Italie)</option>
                                            <option value="Ivoirienne">Ivoirienne (Côte d'Ivoire)</option>
                                            <option value="Jamaïcaine">Jamaïcaine (Jamaïque)</option>
                                            <option value="Japonaise">Japonaise (Japon)</option>
                                            <option value="Jordanienne">Jordanienne (Jordanie)</option>
                                            <option value="Kazakhstanaise">Kazakhstanaise (Kazakhstan)</option>
                                            <option value="Kenyane">Kenyane (Kenya)</option>
                                            <option value="Kirghize">Kirghize (Kirghizistan)</option>
                                            <option value="Kiribatienne">Kiribatienne (Kiribati)</option>
                                            <option value="Kittitienne">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                                            <option value="Koweïtienne">Koweïtienne (Koweït)</option>
                                            <option value="Laotienne">Laotienne (Laos)</option>
                                            <option value="Lesothane">Lesothane (Lesotho)</option>
                                            <option value="Lettone">Lettone (Lettonie)</option>
                                            <option value="Libanaise">Libanaise (Liban)</option>
                                            <option value="Libérienne">Libérienne (Libéria)</option>
                                            <option value="Libyenne">Libyenne (Libye)</option>
                                            <option value="Liechtensteinoise">Liechtensteinoise (Liechtenstein)</option>
                                            <option value="Lituanienne">Lituanienne (Lituanie)</option>
                                            <option value="Luxembourgeoise">Luxembourgeoise (Luxembourg)</option>
                                            <option value="Macédonienne">Macédonienne (Macédoine)</option>
                                            <option value="Malaisienne">Malaisienne (Malaisie)</option>
                                            <option value="Malawienne ">Malawienne (Malawi)</option>
                                            <option value="Maldivienne">Maldivienne (Maldives)</option>
                                            <option value="Malgache">Malgache (Madagascar)</option>
                                            <option value="Maliennes">Maliennes (Mali)</option>
                                            <option value="Maltaise">Maltaise (Malte)</option>
                                            <option value="Marocaine">Marocaine (Maroc)</option>
                                            <option value="Marshallaise">Marshallaise (Îles Marshall)</option>
                                            <option value="Mauricienne">Mauricienne (Maurice)</option>
                                            <option value="Mauritanienne">Mauritanienne (Mauritanie)</option>
                                            <option value="Mexicaine">Mexicaine (Mexique)</option>
                                            <option value="Micronésienne">Micronésienne (Micronésie)</option>
                                            <option value="Moldave">Moldave (Moldovie)</option>
                                            <option value="Monegasque">Monegasque (Monaco)</option>
                                            <option value="Mongole">Mongole (Mongolie)</option>
                                            <option value="Monténégrine">Monténégrine (Monténégro)</option>
                                            <option value="Mozambicaine">Mozambicaine (Mozambique)</option>
                                            <option value="Namibienne">Namibienne (Namibie)</option>
                                            <option value="Nauruane">Nauruane (Nauru)</option>
                                            <option value="Néerlandaise">Néerlandaise (Pays-Bas)</option>
                                            <option value="Néo-Zélandaise">Néo-Zélandaise (Nouvelle-Zélande)</option>
                                            <option value="Népalaise">Népalaise (Népal)</option>
                                            <option value="Nicaraguayenne">Nicaraguayenne (Nicaragua)</option>
                                            <option value="Nigériane">Nigériane (Nigéria)</option>
                                            <option value="Nigérienne">Nigérienne (Niger)</option>
                                            <option value="Niuéenne">Niuéenne (Niue)</option>
                                            <option value="Nord-coréenne">Nord-coréenne (Corée du Nord)</option>
                                            <option value="Norvégienne">Norvégienne (Norvège)</option>
                                            <option value="Omanaise">Omanaise (Oman)</option>
                                            <option value="Ougandaise">Ougandaise (Ouganda)</option>
                                            <option value="Ouzbéke">Ouzbéke (Ouzbékistan)</option>
                                            <option value="Pakistanaise">Pakistanaise (Pakistan)</option>
                                            <option value="Palaosienne">Palaosienne (Palaos)</option>
                                            <option value="Palestinienne">Palestinienne (Palestine)</option>
                                            <option value="Panaméenne">Panaméenne (Panama)</option>
                                            <option value="apouane-Néo-Guinéenne">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                            <option value="Paraguayenne">Paraguayenne (Paraguay)</option>
                                            <option value="Péruvienne">Péruvienne (Pérou)</option>
                                            <option value="Philippine">Philippine (Philippines)</option>
                                            <option value="Polonaise">Polonaise (Pologne)</option>
                                            <option value="Portugaise">Portugaise (Portugal)</option>
                                            <option value="Qatarienne">Qatarienne (Qatar)</option>
                                            <option value="Roumaine">Roumaine (Roumanie)</option>
                                            <option value="Russe">Russe (Russie)</option>
                                            <option value="Rwandaise">Rwandaise (Rwanda)</option>
                                            <option value="Saint-Lucienne">Saint-Lucienne (Sainte-Lucie)</option>
                                            <option value="Saint-Marinaise">Saint-Marinaise (Saint-Marin)</option>
                                            <option value="Saint-Vincentaise et Grenadine">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                            <option value="Salomonaise">Salomonaise (Îles Salomon)</option>
                                            <option value="Salvadorienne">Salvadorienne (Salvador)</option>
                                            <option value="Samoane">Samoane (Samoa)</option>
                                            <option value="Santoméenne">Santoméenne (Sao Tomé-et-Principe)</option>
                                            <option value="Saoudienne">Saoudienne (Arabie saoudite)</option>
                                            <option value="Sénégalaise">Sénégalaise (Sénégal)</option>
                                            <option value="Serbe">Serbe (Serbie)</option>
                                            <option value="eychelloise">Seychelloise (Seychelles)</option>
                                            <option value="Sierra-Léonaise">Sierra-Léonaise (Sierra Leone)</option>
                                            <option value="Slovaque">c(Singapour)</option>
                                            <option value="Slovaque">Slovaque (Slovaquie)</option>
                                            <option value="Slovène">Slovène (Slovénie)</option>
                                            <option value="Somalienne">Somalienne (Somalie)</option>
                                            <option value="Soudanaise">Soudanaise (Soudan)</option>
                                            <option value="Sri-Lankaise">Sri-Lankaise (Sri Lanka)</option>
                                            <option value="Sud-Africaine">Sud-Africaine (Afrique du Sud)</option>
                                            <option value="Sud-Coréenne">Sud-Coréenne (Corée du Sud)</option>
                                            <option value="Sud-Soudanaise">Sud-Soudanaise (Soudan du Sud)</option>
                                            <option value="Suédoise">Suédoise (Suède)</option>
                                            <option value="Suisse">Suisse (Suisse)</option>
                                            <option value="Surinamaise">Surinamaise (Suriname)</option>
                                            <option value="Swazie">Swazie (Swaziland)</option>
                                            <option value="Syrienne">Syrienne (Syrie)</option>
                                            <option value="Tadjike ">Tadjike (Tadjikistan)</option>
                                            <option value="Tanzanienne">Tanzanienne (Tanzanie)</option>
                                            <option value="Tchadienne">Tchadienne (Tchad)</option>
                                            <option value="Tchèque">Tchèque (Tchéquie)</option>
                                            <option value="Thaïlandaise">Thaïlandaise (Thaïlande)</option>
                                            <option value="Togolaise">Togolaise (Togo)</option>
                                            <option value="Tonguienne">Tonguienne (Tonga)</option>
                                            <option value="Trinidadienne">Trinidadienne (Trinité-et-Tobago)</option>
                                            <option value="Tunisienne">Tunisienne (Tunisie)</option>
                                            <option value="Turkmène">Turkmène (Turkménistan)</option>
                                            <option value="Turque">Turque (Turquie)</option>
                                            <option value="Tuvaluane">Tuvaluane (Tuvalu)</option>
                                            <option value="Ukrainienne">Ukrainienne (Ukraine)</option>
                                            <option value="Uruguayenne">Uruguayenne (Uruguay)</option>
                                            <option value="Vanuatuane">Vanuatuane (Vanuatu)</option>
                                            <option value="Vaticane">Vaticane (Vatican)</option>
                                            <option value="Vénézuélienne">Vénézuélienne (Venezuela)</option>
                                            <option value="Vietnamienne">Vietnamienne (Viêt Nam)</option>
                                            <option value="Yéménite">Yéménite (Yémen)</option>
                                            <option value="Zambienne">Zambienne (Zambie)</option>
                                            <option value="Zimbabwéenne">Zimbabwéenne (Zimbabwe)</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--============ profession de l'epouse ===================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="profession_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Profession:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="profession_epouse" class="form-control {{ $errors->has('profession_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_epouse : old('profession_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                {{--======== situation matrimoniale de l'epouse ========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="situation_matrimoniale_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Situation matrimoniale:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <select name="situation_matrimoniale_epouse"
                                                class="form-control {{ $errors->has('situation_matrimoniale_epouse') ? 'is-invalid' : '' }}"
                                                @if(session()->has('success')) disabled @endif >

                                            @if(session()->has('success'))
                                                <option>{{old('situation_matrimoniale_epouse')}}</option>
                                            @endif
                                            <option value="">{{ $declaration->situation_matrimoniale_epouse }}</option>
                                            <option value="Pré-marié">Pré-marié</option>
                                            <option value="Célibataire">Célibataire</option>
                                            <option value="Divorcé">Divorcé</option>
                                            <option value="Veuf">Veuf</option>
                                        </select>

                                        {!! $errors->first('situation_matrimoniale_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== domicile de l'epouse ================--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="adresse_epouse" class="form-control {{ $errors->has('adresse_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->adresse_epouse : old('adresse_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('adresse_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms du pere de l'epouse ==========--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent1_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom du père (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent1_epouse" class="form-control {{ $errors->has('parent1_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->parent1_epouse : old('parent1_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('parent1_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                {{--=============== noms et prenoms de la mere de l'epouse ===============--}}
                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label for="parent2_epouse" class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Nom de la mère (nom complet):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="parent2_epouse" class="form-control {{ $errors->has('parent2_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->parent2_epouse : old('parent2_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('parent2_epouse', '<div class="invalid-feedback">:message</div>') !!}
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
                                    <div class="checkbox checkbox-success form-check-inline col-sm-3 offset-lg-3">
                                        <input type="checkbox" id="checkID"  name="fil" onclick="infoActeTemoins(this, infoAct1)">
                                        Mariage contracté à l'étranger
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div id="infoAct1">
                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;N° acte de mariage:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="number" min="1" name="numero_acte"
                                                   class="form-control {{ $errors->has('numero_acte') ? 'is-invalid' : '' }}"
                                                   value="{{ old('numero_acte') }}" @if(session()->has('success') ) readonly @endif >

                                            {!! $errors->first('numero_acte', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Référence registre:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="text" name="reference" class="form-control {{ $errors->has('reference') ? 'is-invalid' : '' }}"
                                                   value="{{ old('reference') }}" @if(session()->has('success') ) readonly @endif >

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Lieu de publication:</label>
                                        </div>

                                        <div class="col-sm-4 text-lg-left">
                                            <select name="lieu_delivrance_acte_mariage_temoins_epoux" onchange="getLieu(this);"
                                                    class="form-control {{ $errors->has('lieu_delivrance_acte_mariage_temoins_epoux') ? 'is-invalid' : '' }}">
                                                <option value="">---</option>

                                                @foreach($allCentres as $centre)
                                                    <option value="{{$centre->designation}}"
                                                            {{ (old('lieu_delivrance_acte_mariage_temoins_epoux') == $centre->designation)? 'selected':'' }} >
                                                        {{ $centre->designation }}
                                                    </option>
                                                @endforeach

                                            </select>

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Année:</label>
                                        </div>

                                        <div class="col-sm-1 text-lg-left">
                                            <select name="annee_delivrance_acte_mariage_temoins_epoux" onchange="getLieu(this);"
                                                    class="form-control {{ $errors->has('annee_delivrance_acte_mariage_temoins_epoux') ? 'is-invalid' : '' }}"
                                                    @if(session()->has('success') ) disabled @endif >

                                                <option value="">---</option>
                                                @foreach($years as $y)
                                                    <option value="{{ $y }}"
                                                            {{ (old('annee_delivrance_acte_mariage_temoins_epoux') == $y)? 'selected':'' }} >
                                                        {{ $y }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                </div>

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
                                        <input type="text" name="nom_temoin1_epoux"
                                               class="form-control {{ $errors->has('nom_temoin1_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->nom_temoin1_epoux : old('nom_temoin1_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('nom_temoin1_epoux', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_temoin1_epoux"
                                               class="form-control {{ $errors->has('prenom_temoin1_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->prenom_temoin1_epoux : old('prenom_temoin1_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('prenom_temoin1_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="profession_temoin1_epoux"
                                               class="form-control {{ $errors->has('profession_temoin1_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_temoin1_epoux : old('profession_temoin1_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_temoin1_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="domicile_temoin1_epoux"
                                               class="form-control {{ $errors->has('domicile_temoin1_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_temoin1_epoux : old('domicile_temoin1_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('domicile_temoin1_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>

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
                                        <input type="text" name="nom_jeune_fille_temoin2_epoux"
                                               class="form-control {{ $errors->has('nom_jeune_fille_temoin2_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->nom_jeune_fille_temoin2_epoux : old('nom_jeune_fille_temoin2_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('nom_jeune_fille_temoin2_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="profession_temoin2_epoux"
                                               class="form-control {{ $errors->has('profession_temoin2_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_temoin2_epoux : old('profession_temoin2_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_temoin2_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="domicile_temoin2_epoux"
                                               class="form-control {{ $errors->has('domicile_temoin2_epoux') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->domicile_temoin2_epoux : old('domicile_temoin2_epoux') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('domicile_temoin2_epoux', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                            </div>

                            <!-- Formulaire temoins epouse -->
                            <div class="tab-pane fade" id="temoins_epouse_id">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                    <span class="txtColorGreen txtSizeLarge2">
                                        Informations sur l'acte de mariage des temoins du futur marié
                                    </span>
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="checkbox checkbox-success form-check-inline col-sm-3 offset-lg-3">
                                        <input type="checkbox" id="checkID"  name="fil" onclick="infoActeTemoins(this, infoAct2)">
                                        Mariage contracté à l'étranger
                                    </div>

                                </div>
                                <div class="lineEspace"></div>

                                <div id="infoAct2">
                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;N° acte de mariage:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="number" min="1" name="numero_acte"
                                                   class="form-control {{ $errors->has('numero_acte') ? 'is-invalid' : '' }}"
                                                   value="{{ old('numero_acte') }}" @if(session()->has('success') ) readonly @endif >

                                            {!! $errors->first('numero_acte', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Référence registre:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left">
                                            <input type="text" name="reference" class="form-control {{ $errors->has('reference') ? 'is-invalid' : '' }}"
                                                   value="{{ old('reference') }}" @if(session()->has('success') ) readonly @endif >

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-3 text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Lieu de publication:</label>
                                        </div>

                                        <div class="col-sm-4 text-lg-left">
                                            <select name="lieu_delivrance_acte_mariage_temoins_epouse" onchange="getLieu(this);"
                                                    class="form-control {{ $errors->has('lieu_delivrance_acte_mariage_temoins_epouse') ? 'is-invalid' : '' }}"
                                                    @if(session()->has('success') ) disabled @endif >
                                                <option value="">---</option>

                                                @foreach($allCentres as $centre)
                                                    <option value="{{$centre->designation}}"
                                                            {{ (old('lieu_delivrance_acte_mariage_temoins_epouse') == $centre->designation)? 'selected':'' }} >
                                                        {{ $centre->designation }}
                                                    </option>
                                                @endforeach

                                            </select>

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                        <div class="text-lg-right">
                                            <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Année:</label>
                                        </div>

                                        <div class="col-sm-1 text-lg-left">
                                            <select name="annee_delivrance_acte_mariage_temoins_epouse" onchange="getLieu(this);"
                                                    class="form-control {{ $errors->has('annee_delivrance_acte_mariage_temoins_epouse') ? 'is-invalid' : '' }}"
                                                    @if(session()->has('success') ) disabled @endif >

                                                <option value="">---</option>
                                                @foreach($years as $y)
                                                    <option value="{{ $y }}"
                                                            {{ (old('annee_delivrance_acte_mariage_temoins_epouse') == $y)? 'selected':'' }} >
                                                        {{ $y }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>

                                    </div>
                                </div>

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
                                        <input type="text" name="nom_temoin1_epouse"
                                               class="form-control {{ $errors->has('nom_temoin1_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->nom_temoin1_epouse : old('nom_temoin1_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('nom_temoin1_epouse', '<div class="invalid-feedback">:message</div>') !!}

                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed"></span>&nbsp;Prénom(s):</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="prenom_temoin1_epouse"
                                               class="form-control {{ $errors->has('prenom_temoin1_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->prenom_temoin1_epouse : old('prenom_temoin1_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('prenom_temoin1_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="profession_temoin1_epouse"
                                               class="form-control {{ $errors->has('profession_temoin1_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_temoin1_epouse : old('profession_temoin1_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_temoin1_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="domicile_temoin1_epouse"
                                               class="form-control {{ $errors->has('domicile_temoin1_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->domicile_temoin1_epouse : old('domicile_temoin1_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('domicile_temoin1_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>

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
                                        <input type="text" name="nom_jeune_fille_temoin2_epouse"
                                               class="form-control {{ $errors->has('nom_jeune_fille_temoin2_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->nom_jeune_fille_temoin2_epouse : old('nom_jeune_fille_temoin2_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('nom_jeune_fille_temoin2_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm">Profession:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="profession_temoin2_epouse"
                                               class="form-control {{ $errors->has('profession_temoin2_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->profession_temoin2_epouse : old('profession_temoin2_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('profession_temoin2_epouse', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-3 offset-lg-0 text-lg-right">
                                        <label class="txtLabelForm"><span class="txtColorRed">*</span>&nbsp;Domicile/Résidence:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left end">
                                        <input type="text" name="domicile_temoin2_epouse"
                                               class="form-control {{ $errors->has('domicile_temoin2_epouse') ? 'is-invalid' : '' }}"
                                               value="{{ $edit ? $declaration->domicile_temoin2_epouse : old('domicile_temoin2_epouse') }}"
                                               @if(session()->has('success') ) readonly @endif >

                                        {!! $errors->first('domicile_temoin2_epouse', '<div class="invalid-feedback">:message</div>') !!}
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
                                            <input type="text" name="date_celebration" id="datepicker-autoclose5" placeholder="jj/mm/aaaa"
                                                   class="form-control {{ $errors->has('date_celebration') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? date_create($declaration->date_celebration)->format('d/m/Y') : old('date_celebration') }}"
                                                   @if(session()->has('success')) disabled @endif >

                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>

                                        {!! $errors->first('date_celebration', '<div class="invalid-feedback">:message</div>') !!}
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
                                            <input type="text" name="heure_celebration" class="form-control" id="clockpicker"
                                                   class="form-control {{ $errors->has('heure_celebration') ? 'is-invalid' : '' }}"
                                                   value="{{ $edit ? $declaration->heure_celebration : old('heure_celebration') }}"
                                                   @if(session()->has('success') ) disabled @endif >

                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-clock text-white"></i>
                                        </span>
                                        </div>
                                        {!! $errors->first('heure_celebration', '<div class="invalid-feedback">:message</div>') !!}
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
                                                class="form-control {{ $errors->has('lieu_celebration') ? 'is-invalid' : '' }}"
                                                @if(session()->has('success') ) disabled @endif >

                                            @if(session()->has('success'))
                                                <option>{{ old('lieu_celebration') }}</option>
                                            @endif

                                            <option value="">---</option>
                                            @foreach($allCentres as $etatCivil)
                                                <option value="{{ $etatCivil->designation }}">
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

                        @if (!session()->has('success'))
                            <div class="row">
                                <div class="col-sm-4 offset-lg-4">
                                    <button type="" class="btn btn-primary txtSizeLarge2" id="custom-alert">Enregistrer les modification</button>

                                </div>
                            </div>
                        @endif
                    </form>
                    <!-- Fin du formulaire de declaration de mariage-->

                </div>
            </div>
            <div class="lineEspace"></div>

        </div>
    </div>

@endsection