@extends('/layouts/layout')

@include('/layouts/navigation')
@include('/layouts/footer')

@section('content')

    <style>
        table, th, td {
            border: 1px solid #768027;
            border-collapse: collapse;
        }
        th{
            padding: 5px;
            text-align: center;
            font-family: "Times New Roman";
            font-weight: bold;
            font-size: 20px;
        }

        td {
            padding: 5px;
            text-align: right;
        }

        table#t01 {
            width: auto;
            background-color: rgba(247, 247, 199, 0.67);
        }
    </style>

    <div class="bgRoadZone hide-for-small-only" style="padding-top:5px; padding-bottom:5px; background-color: #eefad2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Consultations <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i>
                </span>Etats et statistiques mariages
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper" style="background-color: white;">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <span class="mdi mdi-36px mdi-chart-areaspline txtSizeXXLarge" style="color: #0e531c">Etats et statistiques des mariages</span>
                </div>
            </div>

            <div class="bgColorSite" style="height:1px;"></div>
            <div class="bgOblicLigne1" style="height:6px;"></div>
            <div class="lineEspace"></div>


            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-pills navtab-bg tabs-bordered w3-text">
                        <li class="nav-item">
                            <a href="#tab1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                Volume global des mariages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Volume de mariage par âge
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab3" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                Variation mensuelle du volume des mariages
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content" style="">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{--<div class="p-20 m-b-20">--}}
                                        <h5 class="m-t-0 txtColorGreenDark">Volume global des mariages</h5>

                                        <div id="chartContainer" style="height: 300px;"></div>

                                    {{--</div>--}}
                                </div>

                                <div class="col-lg-6">

                                </div>

                            </div>
                            <!-- end row -->
                        </div>

                        <div class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-sm-9">
                                    <label class="txtLabelForm">Répartition des mariages par sexe et par groupe d’âges de </label>

                                    <select class="" name="date_Inf" style="width: 70px">
                                        <option value="">---</option>
                                        @foreach($years as $y)
                                            <option value="{{ $y }}">{{ $y }}</option>
                                        @endforeach
                                    </select>

                                    <label class="" style="background-color: #dae1e7; padding-right: 10px; padding-left: 10px">à</label>

                                    <select class="" name="date_Sup" style="width: 70px">
                                        <option value="">---</option>
                                        @foreach($years as $y)
                                            <option value="{{ $y }}">{{ $y }}</option>
                                        @endforeach
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <a type="button" href=""
                                       class="btn btn-default btn-sm txtSizeLarge2">Afficher les stats
                                    </a>

                                </div>

                            </div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{--<div id="chartAge" style="height: 370px; max-width: 1000px; margin: 0px auto;"></div>--}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="" id="t01" style="width:100%;">
                                        <tr class="txtColorBlue" style="border: #0b2e13">
                                            <th rowspan="3">Groupes d'âges</th>
                                            <th colspan="6">Sexe masculin</th>
                                            <th colspan="6">Sexe feminin</th>
                                        </tr>

                                        <tr style="color: orange">
                                            <td colspan="2" style="text-align: center">2016</td>
                                            <td colspan="2" style="text-align: center">2017</td>
                                            <td colspan="2" style="text-align: center">2018</td>
                                            <td colspan="2" style="text-align: center">2016</td>
                                            <td colspan="2" style="text-align: center">2017</td>
                                            <td colspan="2" style="text-align: center">2018</td>
                                        </tr>

                                        <tr style="color: black;">
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">15-19 ans</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">20-24</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">25-29</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">30-34</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">35-39</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">35-39</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">40-44</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">45-49</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">50-54</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">55-59</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">65+</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr style="color: #000000; font-weight: bold">
                                            <td style="text-align: left;">Total</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab3">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="get" action="{{ route('mariages.volume', Auth::user()->centre_id) }}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="txtLabelForm">Mariages enregistrés par mois de </label>

                                                <select class="" name="date_inf" style="width: 70px">
                                                    <option value="">---</option>
                                                    @foreach($years as $y)
                                                        <option value="{{ $y }}">{{ $y }}</option>
                                                    @endforeach
                                                </select>

                                                <label class="" style="background-color: #dae1e7; padding-right: 10px; padding-left: 10px">à</label>

                                                <select class="" name="date_sup" style="width: 70px">
                                                    <option value="">---</option>
                                                    @foreach($years as $y)
                                                        <option value="{{ $y }}">{{ $y }}</option>
                                                    @endforeach
                                                </select>&nbsp;&nbsp;&nbsp;&nbsp;

                                                <button type="submit" class="btn btn-default btn-sm txtSizeLarge2">Afficher les stats</i>
                                                </button>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="" id="t01" style="width:100%;">
                                        <tr class="txtColorBlue" style="border: #0b2e13">
                                            <th rowspan="3">Groupes d'âges</th>
                                            <th colspan="6">Sexe masculin</th>
                                            <th colspan="6">Sexe feminin</th>
                                        </tr>

                                        <tr style="color: orange">
                                            <td colspan="2" style="text-align: center">2016</td>
                                            <td colspan="2" style="text-align: center">2017</td>
                                            <td colspan="2" style="text-align: center">2018</td>
                                            <td colspan="2" style="text-align: center">2016</td>
                                            <td colspan="2" style="text-align: center">2017</td>
                                            <td colspan="2" style="text-align: center">2018</td>
                                        </tr>

                                        <tr style="color: black;">
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                            <td>N</td>
                                            <td>%</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">15-19 ans</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">20-24</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">25-29</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">30-34</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">35-39</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">35-39</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">40-44</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">45-49</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">50-54</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">55-59</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">65+</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>

                                        <tr style="color: #000000; font-weight: bold">
                                            <td style="text-align: left;">Total</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577854</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                            <td>55577855</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="lineEspace"></div>

                        </div>

                    </div>
            </div>
            <div class="lineEspace"></div>

        </div> <!-- end container -->
        </div>
    </div>
    <!-- end wrapper -->


    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    // text: "Statistiques des mariages",
                    // horizontalAlign: "left"
                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontSize: 17,
                    indexLabel: "{label} - #percent%",
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    dataPoints: [
                        { y: 67, label: "Mairie centrale" },
                        { y: 28, label: "Moungali" },
                        { y: 10, label: "Talangai" },
                        { y: 7, label: "Ouenze"},
                        { y: 15, label: "Poto-poto"},
                        { y: 6, label: "Mfilou"}
                    ]
                }]
            });

            chart.render();

            var chartAge = new CanvasJS.Chart("chartAge", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Simple Line Chart"
                },
                axisY:{
                    includeZero: false
                },
                data: [{
                    type: "line",
                    dataPoints: [
                        { y: 450 },
                        { y: 414},
                        { y: 520},
                        { y: 460 },
                        { y: 450 },
                        { y: 500 },
                        { y: 480 },
                        { y: 480 },
                        { y: 410 },
                        { y: 500 },
                        { y: 480 },
                        { y: 510 }
                    ]
                }]
            });
            chartAge.render();



        }

    </script>

    <script src={{URL::to('js/canvasjs-2.1/canvasjs.min.js')}}></script>
    <script src={{URL::to('js/canvasjs-2.1/jquery.canvasjs.min.js')}}></script>


@endsection
