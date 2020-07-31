@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')


@section('content')

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                        Mariages <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                        </span>Déclaration<span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                        </span>Oppositions
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper"  style="background-color: white;">
        <div class="container-fluid">

            <div class="row" style="padding-bottom:5px;">
                <div class="col-sm-6 txtSizeMedium txtColorDark text-left">
                    <strong><span class="txtColorGreenDark">Liste des oppositions au mariage entre : </span>
                    </strong>
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
                                <tr class="txtColorBlue" style="border:#149e5c">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Opposant</th>
                                    <th>Qualité</th>
                                    <th>Adresse</th>
                                    <th>Téléphone</th>
                                    <th>Motif</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($oppositions as $opposition)
                                    <tr>
                                        <td>{{ $numero = $numero + 1 }}</td>
                                        <td>{{ date_create($opposition->created_at)->format('d/m/Y') }} </td>
                                        <td style="color: red">{{ $opposition->nom_opp }} {{ $opposition->prenom_opp }}</td>
                                        <td>{{ $opposition->qualite_opp }}</td>
                                        <td>{{ $opposition->adresse_opp }}</td>
                                        <td>{{ $opposition->tel_opp }}</td>
                                        <td>{{ $opposition->motif_opp }}</td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="right" data-original-title="Consulter le registre...">
                                                <a href="#">
                                                    <i class="mdi mdi-file-document-box txtColorOrange" style="font-size: 30px"></i>
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
            <!-- end row -->

        </div>
    </div>

@endsection