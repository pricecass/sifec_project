@extends('layouts.layout')

@include('layouts.navigation')
@include('layouts.footer')

@section('content')

<div class="wrapper"  style="background-color: white;">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Tableau de bord </h4></div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="widget-inline-box text-center">
                                                <h2 class="m-t-10"><i class="text-success mdi mdi-access-point-network"></i>
                                                    <b style="color: #FF0000">{{ $total_decl }}</b></h2>
                                                <p class="text-muted">Total déclarations de mariage</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="widget-inline-box text-center">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i>
                                                    <b>{{ $nb_decl_enr->count }}</b></h3>
                                                <p class="text-muted">Déclarations en état enregistré</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="widget-inline-box text-center">
                                                <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i>
                                                    <b>{{ $nb_decl_pub->count }}</b></h3>
                                                <p class="text-muted">Déclarations en état publié</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="widget-inline-box text-center b-0">
                                                <h3 class="m-t-10"><i class="text-danger mdi mdi-cellphone-link"></i>
                                                    <b>{{ $nb_mar_enr }}</b></h3>
                                                <p class="text-muted">Total des mariages enregistrés</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: "Statistiques des mariages",
                horizontalAlign: "left"
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


        // function explodePie(e) {
        //     for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        //         if(i !== e.dataPointIndex)
        //             e.dataSeries.dataPoints[i].exploded = false;
        //     }
        // }


        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            title:{
                text: "Crude Oil Reserves vs Production, 2016"
            },
            axisY: {
                title: "Billions of Barrels",
                titleFontColor: "#4F81BC",
                lineColor: "#4F81BC",
                labelFontColor: "#4F81BC",
                tickColor: "#4F81BC"
            },
            axisY2: {
                title: "Millions of Barrels/day",
                titleFontColor: "#C0504E",
                lineColor: "#C0504E",
                labelFontColor: "#C0504E",
                tickColor: "#C0504E"
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor:"pointer",
                itemclick: toggleDataSeries
            },
            data: [{
                type: "column",
                name: "Proven Oil Reserves (bn)",
                legendText: "Proven Oil Reserves",
                showInLegend: true,
                dataPoints:[
                    { label: "Saudi", y: 266.21 },
                    { label: "Venezuela", y: 302.25 },
                    { label: "Iran", y: 157.20 },
                    { label: "Iraq", y: 148.77 },
                    { label: "Kuwait", y: 101.50 },
                    { label: "UAE", y: 97.8 }
                ]
            },
                {
                    type: "column",
                    name: "Oil Production (million/day)",
                    legendText: "Oil Production",
                    axisYType: "secondary",
                    showInLegend: true,
                    dataPoints:[
                        { label: "Saudi", y: 10.46 },
                        { label: "Venezuela", y: 2.27 },
                        { label: "Iran", y: 3.99 },
                        { label: "Iraq", y: 4.45 },
                        { label: "Kuwait", y: 2.92 },
                        { label: "UAE", y: 3.1 }
                    ]
                }]
        });

        chart.render();
        chart1.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart1.render();
        }


            var chart2 = new CanvasJS.Chart("chartContainer3", {
                exportEnabled: true,
                animationEnabled: true,
                title:{
                    text: "Statistiques des mariages"
                },
                legend:{
                    cursor: "pointer",
                    itemclick: explodePie
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    toolTipContent: "{name}: <strong>{y}%</strong>",
                    indexLabel: "{name} - {y}%",
                    dataPoints: [
                        { y: 26, name: "Mairie centrale", exploded: true },
                        { y: 20, name: "Mairie de Moungali" },
                        { y: 5, name: "Mairie de Bacongo" },
                        { y: 3, name: "Mairie de Makélékélé" },
                        { y: 7, name: "Mairie de Poto-poto" },
                        { y: 17, name: "Mairie de Talangai" },
                        { y: 22, name: "Mairie de Ouenzé" },
                        { y: 10, name: "Mairie de Mfilou" },
                        { y: 2, name: "Mairie de Djiri" },
                        { y: 4, name: "Mairie de Madibou" }
                    ]
                }]
            });
            chart2.render();
        }

        function explodePie (e) {
            if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" ||
                !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            } else {
                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            }
            e.chart.render();

    }
</script>

<script src={{URL::to('js/canvasjs-2.1/canvasjs.min.js')}}></script>
<script src={{URL::to('js/canvasjs-2.1/jquery.canvasjs.min.js')}}></script>

@endsection
