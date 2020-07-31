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
                    Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                    </span>
                    <a href="{{ route('registers.list') }}" class="txtColorGreen">Regsitres des mariages </a>
                    <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>
                    Actes de mariage
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper"  style="background-color: white;">
    <div class="container-fluid">

        <div class="row" style="padding-bottom:5px;">
            <div class="col-sm-6 txtSizeMedium txtColorDark text-left">
                <strong><span class="txtColorGreenDark">Liste des actes de mariages du registre</span></strong>
            </div>

            <div class="col-sm-6  txtSizeRegular text-right">
                <ul class="btn-group right" style="list-style: none;">
                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark"><a href="#"><i class=" mdi mdi-plus-circle" style="font-size:30px; color:green"></i></a>
                        <a href="{{ route('declaration.create') }}">Ajouter une nouvelle déclaration...</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bgOblicLigne1" style="height:6px;"></div>
        <div class="lineEspace"></div>

        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-5">
                <div class="table-responsive">
                    <table id="datatable" class="table bordered table-striped w3-card-2" cellspacing="0" width="100%">
                        <thead>
                            <tr class="txtColorBlue">
                                <th>#</th>
                                <th>Date célébration</th>
                                <th>N° Acte</th>
                                <th>Epoux</th>
                                <th>Epouse</th>
                                <th>Temoins époux</th>
                                <th>Temoins épouse</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($content as $marriage)
                            <tr class="w3-text-black">
                                <td>{{ $numero = $numero + 1 }}</td>

                                <td>{{ date_create($marriage->date_celebration)->format('d/m/Y') }}</td>

                                <td><span class="" style="font-size: 18px; color: #FF0000">{{ $marriage->numero_acte }}</span></td>

                                <td>{{ $marriage->nom_epoux }} {{ $marriage->prenom_epoux }}</td>

                                <td>{{ $marriage->nom_epouse }} {{ $marriage->prenom_epouse }} </td>

                                <td> M. & Mme {{ $marriage->nom_temoin1_epoux }} {{ $marriage->prenom_temoin1_epoux }}
                                    née {{ $marriage->nom_jeune_fille_temoin2_epoux }}
                                </td>
                                <td> M. & Mme {{ $marriage->nom_temoin1_epouse }} {{ $marriage->prenom_temoin1_epouse }}
                                     née {{ $marriage->nom_jeune_fille_temoin2_epouse }}
                                </td>

                                <td>
                                    <span data-toggle="tooltip" data-placement="top" data-original-title="Voir les détails...">
                                        <a href="{{ route('acte.show', $marriage->id) }}">
                                            <i class="mdi mdi-file-document" style="font-size:30px;color:green"></i>
                                        </a>
                                    </span>

                                    {{--<span data-toggle="tooltip" data-placement="top" data-original-title="Voir les détails...">--}}
                                        {{--<a href="{{ route('acte.show', $marriage->id) }}">--}}
                                            {{--<i class="mdi mdi-file-document" style="font-size:30px;color:green"></i>--}}
                                        {{--</a>--}}
                                    {{--</span>--}}

                                    <span data-toggle="tooltip" data-placement="top" data-original-title="Générer l'acte...">
                                        <a href="{{ route('acte-mariage.pdf', $marriage->id) }}" target="_blank">
                                            <i class="mdi mdi-equal-box" style="font-size:30px;color: darkorange"></i>
                                        </a>
                                    </span>
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