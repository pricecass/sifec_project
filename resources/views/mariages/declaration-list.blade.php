@extends('layouts.layout')

@include('layouts.navigation')
@include('layouts.footer')

@section('content')

<div class="bgRoadZone hide-for-small-only" style="padding-top:5px;
    padding-bottom:5px; background-color: #eefad2">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                    Déclarations des mariages
                </div>
            </div>
        </div>
    </div>

</div>

<div class="wrapper"  style="background-color: white;">
    <div class="container-fluid">

        <div class="row" style="padding-bottom:5px;">
            <div class="col-sm-6 txtSizeMedium txtColorDark text-left">
                <strong><span class="txtColorGreenDark">Liste des déclarations des mariages</span></strong>
            </div>

            <div class="col-sm-6  txtSizeRegular text-right">
                <ul class="btn-group right" style="list-style: none;">

                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark">
                        <a href="{{ route('declaration.create') }}">
                            <i class=" mdi mdi-plus-circle" style="font-size:30px; color:green"></i>Ajouter une déclaration...
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="bgColorSite" style="height:1px;"></div>
        <div class="bgOblicLigne1" style="height:6px;"></div>
        <div class="lineEspace"></div>

        <div class="row p-t-0">
            <div class="col-lg-12">
                <div class="m-b-5">
                    <div class="table-responsive">
                        <table id="datatable" class="w3-card-2 table bordered table-striped w3-text-black" cellspacing="0" width="100%">
                            <thead>
                                <tr class="txtColorBlue" style="border:#0b2e13">
                                    <th>#</th>
                                    <th>Date de publication</th>
                                    <th>Date de célébration</th>
                                    <th>Noms et prénoms époux</th>
                                    <th>Noms et prénoms épouse</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($declarations as $declaration)
                                <tr>
                                    <td>{{ $numero = $numero + 1 }}</td>
                                    <td>{{ date_create($declaration->created_at)->format('d/m/Y H:i') }}</td>
                                    <td>{{ date_create($declaration->date_celebration)->format('d/m/Y') }}
                                        {{ date_create($declaration->heure_celebration)->format('H:i') }}
                                    </td>
                                    <td>{{ $declaration->nom_epoux }} {{ $declaration->prenom_epoux }}</td>
                                    <td>{{ $declaration->nom_epouse }} {{ $declaration->prenom_epouse }}</td>

                                    {{-- On verifie si la date de publication du bon est égale à la date courante --}}
                                    @if(date_create($declaration->created_at.'+15 day') >= date_create(date('Y-M-d')))
                                        <td style="font-size:15px;color: darkorange;">Publié</td>
                                    @else
                                        <td style="font-size:15px;color:green;">Confirmé</td>
                                    @endif

                                    <td>
                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Voir les détails...">
                                            <a href="{{ route('declaration.show', $declaration->id) }}">
                                                <i class="mdi mdi-file-document-box" style="font-size:30px;color:green"></i>
                                            </a>
                                        </span>

                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Editer la déclaration...">
                                            <a href="{{ route('declaration.edit', $declaration->id) }}">
                                                <i class="mdi mdi-pencil-box" style="font-size:30px;color:darkorange"></i>
                                            </a>
                                        </span>

                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Supprimer la déclaration...">
                                            <a href="{{ route('declaration.delete', $declaration->id) }}">
                                                <i class="mdi mdi-close-box-outline" style="font-size:30px;color:red"></i>
                                            </a>
                                        </span>

                                        <span data-toggle="tooltip" data-placement="top" data-original-title="Publier la déclaration...">
                                            <a href="{{ route('declaration.published', $declaration->id) }}">
                                                <i class="mdi mdi-export" style="font-size:30px;color:#c289ff"></i>
                                            </a>
                                        </span>

                                        {{--@if(date_create($declaration->created_at.'+15 day') <= date_create(date('Y-M-d')))--}}
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Etablir l'acte de mariage...">
                                                <a href="{{ route('declaration.showCelebrateForm', $declaration->id) }}">
                                                    <i class="mdi mdi-pencil-box-outline" style="font-size:30px;color: #3875d7"></i>
                                                </a>
                                            </span>
                                        {{--@endif--}}

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection