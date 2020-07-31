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
                                    <div id="chart2" style="height: 370px; max-width: 1000px; margin: 0 auto;"></div>
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
                                                <label class="txtLabelForm">Mariages enregistrés par mois entre </label>

                                                <select class="" name="date_inf" style="width: 70px">
                                                    <option value="">---</option>
                                                    @foreach($years as $y)
                                                        <option value="{{ $y }}" {{ old('date_inf') == $y ? 'selected':'' }}>{{ $y }}</option>
                                                    @endforeach
                                                </select>

                                                <label class="" style="background-color: #dae1e7; padding-right: 10px; padding-left: 10px"> et </label>

                                                <select class="" name="date_sup" style="width: 70px">
                                                    <option value="">---</option>
                                                    @foreach($years as $y)
                                                        <option value="{{ $y }}" {{ old('date_sup') == $y ? 'selected':'' }}>{{ $y }}</option>
                                                    @endforeach
                                                </select>&nbsp;&nbsp;&nbsp;&nbsp;

                                                <button type="submit" class="btn btn-default btn-sm txtSizeLarge2">Afficher les stats</button>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table-sm" id="t01" style="width:100%;">
                                        <tr class="txtColorBlue" style="border: #0b2e13">
                                            <th rowspan="3">Mois</th>
                                        </tr>

                                        <tr style="color: #e59600; font-weight: bold">
                                        @for($i = 0; $i < count($dataList); $i++)
                                                <td colspan="2" style="text-align: center">{{ $dataList[$i][0] }}</td>
                                        @endfor
                                        </tr>

                                        <tr style="color: black;">
                                        @for($i = 0; $i < count($dataList); $i++)
                                                <td>N</td>
                                                <td>%</td>
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Janvier</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                                <td>{{ $dataList[$i][1][0]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][0]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Février</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][1]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][1]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Mars</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][2]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][2]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Avril</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][3]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][3]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Mai</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][4]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][4]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Juin</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][5]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][5]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Juillet</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][6]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][6]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Août</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][7]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][7]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Septembre</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][8]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][8]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Octobre</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][9]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][9]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Novembre</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][10]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][10]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr>
                                            <td style="text-align: left; color: #FF0000">Décembre</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                            <td>{{ $dataList[$i][1][11]->mar_count }}</td>
                                            @if($dataList[$i][2] == 0)
                                                <td>0.00</td>
                                            @else
                                                <td>{{ round((($dataList[$i][1][11]->mar_count)/$dataList[$i][2])*100, 2) }}</td>
                                            @endif
                                        @endfor
                                        </tr>

                                        <tr style="color: #000000; font-weight: bold">
                                            <td style="text-align: left;">Total</td>
                                        @for($i = 0; $i < count($dataList); $i++)
                                                <td>{{ $dataList[$i][2] }}</td>
                                                <td>100</td>
                                        @endfor
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="lineEspace"></div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="chart3" style="height: 370px; max-width: 1000px; margin: 0 auto;"></div>
                                </div>
                            </div>
                            <div class="lineEspace"></div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="" id="t01" style="width:100%;">

                                        <tr style="color: #e89600; font-weight: bold">
                                            @for($i = 0; $i < count($statsAnnuelles[0]); $i++)
                                                <td colspan="2" style="text-align: center">{{ $statsAnnuelles[0][$i][0] }}</td>
                                            @endfor
                                        </tr>

                                        <tr style="color: black;">
                                            @for($i = 0; $i < count($statsAnnuelles[0]); $i++)
                                                <td>N</td>
                                                <td>%</td>
                                            @endfor
                                        </tr>

                                        <tr>
                                            @for($i = 0; $i < count($statsAnnuelles[0]); $i++)
                                                <td>{{ $statsAnnuelles[0][$i][1]->mar_count }}</td>
                                                <td>{{ round((($statsAnnuelles[0][$i][1]->mar_count)/$statsAnnuelles[1])*100, 2) }}</td>
                                            @endfor
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="lineEspace"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table>
                                        <tr style="color: #000000; font-weight: bold">
                                            <td>Total</td>
                                            <td>{{ $statsAnnuelles[1] }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a type="button" href="{{ route('stats.export_excel', Auth::user()->centre_id) }}"
                               class="btn btn-default btn-sm txtSizeLarge2">Exporter dans excel
                            </a>

                            <div class="lineEspace"></div>

                            {{--<div class="row">--}}
                                <div class="col-md-12">
                                    <div id="chart4" style="height: 370px; max-width: 1000px; margin: 0px auto;"></div>
                                </div>
                            {{--</div>--}}

                        </div>

                    </div>
                </div>

            </div> <!-- end container -->
        </div>
    </div>
    <!-- end wrapper -->


    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
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
                        {y: 67, label: "Mairie centrale"},
                        {y: 28, label: "Moungali"},
                        {y: 10, label: "Talangai"},
                        {y: 7, label: "Ouenze"},
                        {y: 15, label: "Poto-poto"},
                        {y: 6, label: "Mfilou"}
                    ]
                }]
            });
            chart.render();


            var chart3 = new CanvasJS.Chart("chart3", {
                theme: "light1",
                title:{
                    text: "Variarion mensuelle des mariages",
                    //fontFamily: "Time New Roman",
                    fontSize: 18
                },
                axisX: {
                    interval: 1
                },
                axisY: {
                    title: "volume en %"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [
                    @for($i = 0; $i < count($dataList); $i++)
                        {
                            type: "line",
                            name: "{{ $dataList[$i][0] }}",
                            showInLegend: true,
                            axisYIndex: 1,
                            dataPoints: [

                                    @if($dataList[$i][2] != 0)
                                { label: "Janvier", y:  parseFloat({{ round((($dataList[$i][1][0]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Janvier", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Février", y:  parseFloat({{ round((($dataList[$i][1][1]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Février", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Mars", y:  parseFloat({{ round((($dataList[$i][1][2]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Mars", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Avril", y:  parseFloat({{ round((($dataList[$i][1][3]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Avril", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Mai", y:  parseFloat({{ round((($dataList[$i][1][4]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Mai", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Juin", y:  parseFloat({{ round((($dataList[$i][1][5]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Juin", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Juillet", y:  parseFloat({{ round((($dataList[$i][1][6]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Juillet", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Août", y:  parseFloat({{ round((($dataList[$i][1][7]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Août", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Septembre", y:  parseFloat({{ round((($dataList[$i][1][8]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Septembre", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Octobre", y:  parseFloat({{ round((($dataList[$i][1][9]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Octobre", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Novembre", y:  parseFloat({{ round((($dataList[$i][1][10]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Novembre", y: 0 },
                                    @endif

                                    @if($dataList[$i][2] != 0)
                                { label: "Décembre", y:  parseFloat({{ round((($dataList[$i][1][11]->mar_count)/$dataList[$i][2])*100, 2) }}) },
                                    @else
                                { label: "Décembre", y: 0 },
                                    @endif
                            ]
                        },

                    @endfor
                ]
            });
            chart3.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                e.chart.render();
            }


            var chart4 = new CanvasJS.Chart("chart4", {
                animationEnabled: true,
                title: {
                    text: "Variarion anuelle des mariages",
                    //fontFamily: "Time New Roman",
                    fontSize: 18
                },
                axisX: {
                    interval: 1
                },
                axisY: {
                    title: "volume"
                },
                data: [{
                    type: "column",
                    dataPoints: [

                        @for($i = 0; $i < count($statsAnnuelles); $i++)
                            { label: parseInt({{ $statsAnnuelles[0][$i][0] }}), y: parseInt({{ $statsAnnuelles[0][$i][1]->mar_count }}) },
                        @endfor
                    ]
                }]
            });
            chart4.render();

        }

    </script>

    <script src={{URL::to('js/canvasjs-2.1/canvasjs.min.js')}}></script>
    <script src={{URL::to('js/canvasjs-2.1/jquery.canvasjs.min.js')}}></script>


@endsection
