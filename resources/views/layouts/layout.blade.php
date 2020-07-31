<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8" />

        <title>SIFEC Version n&deg;1</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('tools/asset/images/acsi_5.png')}}">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ URL::to('tools/asset/plugins/morris/morris.css')}}">

        <link rel="stylesheet" href="{{URL::to('tools/asset//styles/apptext.css')}}" />
        <!-- DataTables -->
        <link href="{{URL::to('tools/asset/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('tools/asset/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{URL::to('tools/asset/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Plugins css-->
        <link href="{{URL::to('tools/asset/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />

        <link href="{{URL::to('tools/asset/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <link href="{{URL::to('tools/asset/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('tools/asset/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">

        <link href="{{URL::to('tools/asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />

        <link href="{{URL::to('tools/asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />

        <!-- Summernote css -->
        <link href="{{URL::to('tools/asset/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />

        <!-- App css w3 -->
        <link href="{{ URL:: to( 'css/w3school/w3.css' ) }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{URL::to('tools/asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!--calendar css-->
        <link href="{{URL::to('tools/asset/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />

        {{--<link href="{{URL::to('tools/asset/scss/icons/material-design/materialdesignicons.scss')}}" rel="stylesheet" type="text/css" />--}}

        <link href="{{URL::to('tools/asset/css/icons.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('tools/asset/css/style.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('tools/asset/styles/apptext.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('tools/asset/styles/appdesign.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{URL::to('tools/asset/js/modernizr.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/vendor/jquery.js')}}"></script>

        <script src="{{URL::to('tools/angular/angular.js')}}"></script>

        <!-- Sweet Alert -->
        <link href="{{URL::to('tools/asset/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- custom demo style -->
        <link  href="{{URL::to('tools/books/css/default.css')}}" rel="stylesheet" type="text/css" />


        <script type="text/javascript">
            $(window).load(function() {
                $(".chargement").fadeOut("slow");
                $("#util_mdp").val('');
            })
        </script>

</head>
<!-- End head-->

    <body>
        <div class="chargement" id="chargement" style="width:100%;">
            <div style="height:200px;"></div>
            <div class="row">
                <div class="col-sm-12 text-lg-left"><span class="loader1 loader-quart"
                        style="margin-left:500px; margin-top:40px;">
                    </span><span style="color:green;font-size:36px;" class="txtLoader"><strong>Chargement...</strong></span>
                </div>
            </div>
            <div style="height:350px;"></div>
        </div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Image Logo -->
                        <a href="#" class="logo">
                            <img src="{{ URL:: to( 'assets/images/logo_top_sifec.png' ) }}"
                                 alt="" height="35" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->

                    @yield('navigation')

                    <div class="menu-extras topbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                                    </div>

                                    <div class="slimscroll" style="max-height: 220px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            {{--<li class="">--}}
                                {{--<a class="nav-link nav-user" href="{{ route('logout') }}" >--}}
                                    {{--| <span class="txtSizeRegular">Déconnexion</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                                   href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="ml-1">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a href="#" class="dropdown-item notify-item">
                                        <i class="ti-user"></i> <span>Mon compte</span>
                                    </a>

                                    @if(Auth::user()->role_id == 1)
                                        <!-- item-->
                                        <a href="#" class="dropdown-item notify-item">
                                            <i class="ti-settings"></i> <span>Paramètres</span>
                                        </a>
                                    @endif

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="ti-power-off txtColorRed" style="font-weight: bold"></i>
                                        <span>Déconnexion</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->
        </header>
        <!-- End Navigation Bar-->

        @yield( 'content' )

        <div style="padding-top: 30px;position: relative;padding-bottom: 30px;">
            @yield('footer')
        </div>


        <script src="{{URL::to('tools/asset/js/jquery.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/popper.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/bootstrap.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/jquery.slimscroll.js')}}"></script>
        <!-- App js -->
        <!--   -->
        <!-- jQuery  -->
        <script src="{{URL::to('tools/asset/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>

        <script src="{{URL::to('tools/asset/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>

        <script src="{{URL::to('tools/asset/plugins/switchery/switchery.min.jsv')}}"></script>

        <script type="text/javascript" src="{{URL::to('tools/asset/plugins/parsleyjs/parsley.min.jsv')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/moment/moment.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/timepicker/bootstrap-timepicker.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>


        <script src="{{ URL:: to( 'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js' ) }}"></script>
        <script src="{{ URL:: to( 'assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js' ) }}"></script>
        <script src="{{ URL:: to( 'assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js' ) }}"></script>

        <script src="{{URL::to('tools/asset/plugins/summernote/summernote-bs4.min.js')}}"></script>

        <!-- form advanced init js -->
        {{--<script src="{{URL::to('tools/asset/pages/jquery.form-advanced.init.js')}}"></script>--}}
        <script src="{{URL::to('tools/asset/pages/jquery.form-advanced1.init.js')}}"></script>

        <!-- App js -->

        <!-- Sweet-Alert  -->
        <script src="{{URL::to('tools/asset/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{URL::to('tools/asset/pages/jquery.sweet-alert.init.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{URL::to('tools/asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{URL::to('tools/asset/plugins/datatables/dataTables.buttons.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/jszip.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/pdfmake.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/vfs_fonts.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/buttons.html5.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/buttons.print.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{URL::to('tools/asset/plugins/datatables/dataTables.responsive.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <!-- jQuery  -->
        <!--Morris Chart-->
        <script src="{{URL::to('tools/asset/plugins/morris/morris.min.js')}}"></script>

        <script src="{{URL::to('tools/asset/plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{URL::to('tools/asset/pages/jquery.morris.init.js')}}"></script>

        <!-- Flot chart -->
        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.min.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.time.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.resize.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.pie.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.selection.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.stack.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.orderBars.min.js')}}"></script>--}}

        {{--<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>--}}

        <script src="{{URL::to('tools/asset/pages/jquery.flot.init.js')}}"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script  src="{{URL::to('tools/asset/plugins/jquery-knob/excanvas.js')}}"></script>
        <![endif]-->
        <script src="{{URL::to('tools/asset/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{URL::to('tools/asset/plugins/moment/moment.js')}}"></script>
        <script src="{{URL::to('tools/asset/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
        <script src="{{URL::to('tools/asset/pages/jquery.fullcalendar.js')}}"></script>


        <!-- App js -->
        <script src="{{URL::to('tools/asset/js/jquery.core.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/jquery.app.js')}}"></script>

        <script src="{{URL::to('tools/books/js/jquerypp.custom.js')}}"></script>

        <script src="{{URL::to('tools/books/js/jquery.bookblock.js')}}"></script>

        <script src="{{URL::to('tools/asset/js/carte.js')}}"></script>

        <script>
            Page.init();
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

        <?php
        if(isset($datable) && $datable)
        {
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#centres').DataTable();
                $('#registres').DataTable();
            } );
        </script>
        <?php
        }
        ?>

        <script type="text/javascript">


            var globalID=0;


            function myFunction1(id) {

                var id1=id;

                globalID=id;

                //alert(id1);
            }

            function EnvoiReference() {

                // alert(globalID);

                var valeur=$('#valeurReference').val();

                $("#actetrouve").html("");

                //Reinilisation...
                $("[name='nom_deces_decl']").attr("value", '');

                $("[name='prenom_deces_decl']").attr("value",'');

                $("[name='sexe_deces']").attr("value", '');

                $("[name='nom_p_deces']").attr("value", '');

                $("[name='prenom_p_deces']").attr("value", '');

                $("[name='nom_m_deces']").attr("value", '');

                $("[name='prenom_m_deces']").attr("value", '');

                //Fin de reinilisation....


                $.ajax({
                    url: 'Naissance_ctr/detailNaissance', // Le nom du fichier indiqué dans le formulaire
                    data: 'cle='+globalID+'&valeur='+valeur, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                    dataType:'json',
                    success: function(json) { // Je récupère la réponse du fichier PHP
                        $.each(json, function(index, value) {
                            //  alert(value);
                            console.log(value);
                            if(index=='nom_naissance') {
                                $("[name='nom_deces_decl']").attr("value", value);
                                $("#actetrouve").html("r&eacute;f&eacute;rence authentifi&eacute;e");

                            }

                            if(index=='prenom_naissance')  $("[name='prenom_deces_decl']").attr("value", value);

                            if(index=='sexe_decl')  $("[name='sexe_deces']").attr("value", value);

                            if(index=='nom_p_dcl')  $("[name='nom_p_deces']").attr("value", value);

                            if(index=='prenom_p_dcl')  $("[name='prenom_p_deces']").attr("value", value);

                            if(index=='nom_m_dcl')  $("[name='nom_m_deces']").attr("value", value);

                            if(index=='prenom_m_dcl')  $("[name='prenom_m_deces']").attr("value", value);

                            if(index=='date_naissance')
                            {
                                var chaine='';

                                var tab=value.split("-");

                                $("[name='date_nais_deces']").attr("value", tab[2]+'/'+tab[1]+'/'+tab[0]);
                            }

                            if(index=='lieu_ctre')
                            {
                                $("#lieu1").append("<option selected='selected'>"+value+"</option>");
                            }
                            if(index=='nationalite_p_decl')
                            {
                                $("#nationalite_deces").append("<option selected='selected'>"+value+"</option>");
                            }

                            if(index=='sexe_decl')
                            {
                                if(value=='M')
                                {
                                    $("#sexe_deces1").attr("checked", "checked");
                                }
                                else
                                {
                                    $("#sexe_deces2").attr("checked", "checked");
                                }

                            }

                        });
                    }
                });

                $("#actetrouve").fadeOut(6000);
            }


            $(document).ready(function() {

                var v=$('#mariage').val();

                if(v==1) $('#cache2').show();

                var degre=$('#degreparente_decl').val();
                //alert(degre);
                if(degre!='Pere') $('#cache').show();


                $('#EnvoiValeur').click(function (e)
                {
                    var valeurReference =$('#valeurReference').val();
                    //  alert(valeurReference);

                    //alert(globalID);
                });


            });

        </script>
        <!---->





        <script type="text/javascript" src="{{URL::to('tools/confirmjs/demo/demo.js')}}">

        </script>

        <script>
            function AnnulerAgep()
            {
                $("#date_nais_p").val('');
                $("#avertissementage").hide();
                // The function returns the product of p1 and p2
            }
            function ConfirmerAgep()
            {
                $("#avertissementage").hide();
                // The function returns the product of p1 and p2
            }
            function AnnulerAgem()
            {
                $("#date_nais_m").val('');
                $("#avertissementage2").hide();
                // The function returns the product of p1 and p2
            }
            function ConfirmerAgem()
            {
                $("#avertissementage2").hide();
                // The function returns the product of p1 and p2
            }
            function ConfirmerEtabl()
            {
                $("#avertissementage4").hide();
                // The function returns the product of p1 and p2
            }

            function AnnulerEtabl()
            {
                $("#date_trans").val('');
                $("#avertissementage4").hide();
                // The function returns the product of p1 and p2
            }
        </script>

        <script>
            var requete=    function (id){

                var idepart=id;

                var lignes='';

                var i=0;

                $("#bloc2").show();
                // alert(type);
                $.ajax({
                    url: 'Consultation_naissance/statistiquesdepartements', // Le nom du fichier indiqué dans le formulaire
                    //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
                    data: 'id='+idepart, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                    dataType:'json',
                    success: function(json) { // Je récupère la réponse du fichier PHP
                        $.each(json, function(index, value) {
                            // alert(value);

                            if(index=='deces'){ $('#nombre2').html(value);}


                            if(index=='naissances'){ $('#nombre1').html(value)
                            }

                        });
                    }
                });

            };

            var chemins =carte.querySelectorAll('.carte__image a');

            chemins.forEach(function (path){
                path.addEventListener('click', function(e){
                    var id=this.id.replace('CG-','');
                    //activeArea(id);
                    requete(id);

                    console.log(id);

                    if(id==1){$('#titre').html('BRAZZAVILLE');}
                    if(id==2) {$('#titre').html('POINTE-NOIRE');}
                    if(id==7) {$('#titre').html('KOUILOU');}
                    if(id==9) {$('#titre').html('LIKOUALA');}
                    if(id==8) {$('#titre').html('SANGHA');}
                    if(id==6) {$('#titre').html('CUVETTE OUEST');}
                    if(id==5) {$('#titre').html('CUVETTE CENTRALE');}
                    if(id==11) {$('#titre').html('PLATEAUX');}
                    if(id==3) {$('#titre').html('POOL');}
                    if(id==1) {$('#titre').html('BRAZZAVILLE');}
                    if(id==4) {$('#titre').html('BOUENZA');}
                    if(id==10) {$('#titre').html('NIARI');}
                    if(id==8) {$('#titre').html('LEKOUMOU');}

                });
            });

            function RecupereEtablissements(id)
            {
                var idepart=id;

                var lignes='';

                var i=0;

                $("#bloc2").show();
                // alert(type);
                $.ajax({
                    url: 'Consultation_naissance/statistiquesdepartements', // Le nom du fichier indiqué dans le formulaire
                    //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
                    data: 'id='+idepart, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                    dataType:'json',
                    success: function(json) { // Je récupère la réponse du fichier PHP
                        $.each(json, function(index, value) {

                            alert(value);

                        });
                    }
                });
            }

        </script>



        <script>

            $('#choixlocalite').change(function (e)
            {

                var choix =$('#choixlocalite').val();
                // alert(choix);
                //alert(date);
                var chaine='<option></option>';
                $.ajax({
                    url: 'Centre/ListeLocalitesAjax', // Le nom du fichier indiqué dans le formulaire
                    //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
                    data: 'choix='+choix, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                    dataType:'json',

                    success: function(json) { // Je récupère la réponse du fichier PHP
                        $.each(json, function(index, value) {
                            //alert(value);
                            chaine+='<option   '+'value="'+value.id+'">'+value.libelle+'</option>'

                            console.log(value.id+' '+value.libelle);
                        });

                        $('#locales').html(chaine);

                        console.log(chaine);
                    }
                });
                // $('#local').html(chaine);

                // console.log(chaine);

            });
        </script>

        <script>
            $('input[name=choix]').change(function() {
                var value = $(this).val(),
                    //lieu1 = $('#lieu1_id'),
                    lieu2 = $('#lieu1_id'),
                    lieu3 = $('#lieu2_id');

                if (value == "etatCivil") {
                    lieu1.show();
                    lieu2.hide();
                    lieu3.hide();
                } else if (value == "domicileEpoux"){
                    lieu1.hide();
                    lieu2.show();
                    lieu3.hide();
                } else {
                    lieu1.hide();
                    lieu2.hide();
                    lieu3.show();
                }
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".buttons").click(function () {
                    var div = $("#"+this.value);
                    div.toggle("slow").siblings().hide("slow");
                });
            });
        </script>

        <script type="text/javascript">
            function afficher(etat)
            {
                document.getElementById("champ").style.display=etat;
            }
        </script>

        <script type="text/javascript">

        // cette fonction permet de raffraichir le formulaire de declaration de mariage
            function cancelDec()
            {
                if(document.getElementById('checkID').checked) {
                    document.getElementById('infoAct1').style.display='block';
                }

                if(document.getElementById('checkID2').checked) {
                    document.getElementById('infoAct2').style.display='block';
                }
            }
        </script>

        <script type="text/javascript">
            function infoActeTemoins(checkBox, elmt1='')
            {
                if(checkBox.checked) {
                    elmt1.style.display='none';
                }
                else {
                    elmt1.style.display='block';
                }
            }
        </script>


        <script type="text/javascript">
            function show(btn, champ)
            {
                if(btn.checked) {
                    document.getElementById(champ).style.display='inline';
                }
                else {
                    document.getElementById(champ).style.display='none';
                }
            }

            function hide(btn, champ)
            {
                if(!btn.checked) {
                    document.getElementById(champ).style.display='inline';
                }
                else {
                    document.getElementById(champ).style.display='none';
                }
            }
        </script>




        <script type="text/javascript">

            //Chenger le select du regime matrimonial
            function regime()
            {
                var chk1 = document.getElementById('chkMono');
                var chk2 = document.getElementById('chkPoly');
                var choice = document.getElementsByTagName('select')[0];

                if (chk2.checked) {
                    choice.replaceChild(
                        document.getElementById('divRegime').innerHTML = '<select class="form-control" name="regime_matrimonial"><option value="sépartion des biens">Séparation des biens</option></select>'
                        , choice.firstChild);
                }
                else {
                    choice.replaceChild(
                        document.getElementById('divRegime').innerHTML ='<select class="form-control" name="regime_matrimonial"><option value="">---</option>'
                            +'<option value="communauté commune des biens">Communauté commune des biens</option>'
                            +'<option value="séparation des biens">Séparation des biens</option>'
                            +'<option value="communauté réduite aux acquets">Communauté réduite aux acquets</option></select>'
                        , choice.firstChild);
                }
            }

        </script>

        <script type="text/javascript">
            function myFunction() {
                document.getElementById("frm1").reset();
            }
        </script>


        <script type="text/javascript">
            function textUpperCase(elmt) {
                elmt.value = elmt.value.toUpperCase();
            }
        </script>

        <script type="text/javascript">
            function firstCharUpperCase(elmt) {
                var x = elmt.value.split(" ");
                var result = "";

                for (var i = 0; i < x.length; i++){
                    result += x[i].charAt(0).toUpperCase()+x[i].substr(1).toLowerCase()+" ";
                }
                return elmt.value = result;
            }
        </script>

        <script type="text/javascript">
            function getLieu(elmt) {
                var option = document.forms[0].emlt.value;

                if(option ==='Autres') {
                    return document.getElementById('lieu').style.display = 'block';
                }
            }
        </script>

        <script type="text/javascript">

            //  Fonction qui calcule l'age par rapport a une date de naissance sélectionnée
            function calculAge(input) {

                var td=new Date();// Le date d'ouverture de la page (aujourd'hui)

                var dtn=input.value; // on lit la date de naissance

                var an=dtn.substr(6,4); // l'année (les quatre premiers caractères de la chaîne à partir de 6)

                var mois=dtn.substr(3,2);// On selectionne le mois de la date de naissance

                var day= dtn.substr(0,2); // On selectionne la jour de la date de naissance

                var age=td.getFullYear()-an; // l'âge du patient

                var mMois=td.getMonth()-mois; // On calcul  le mois de la date - le mois de la date de naissance

                if(mMois < 0) // s'il est strictement inferieur a 0
                {
                    age=age-1; // On enléve 1 ans a l'age
                }
                else
                {
                    if(mMois === 0)// s'il égal 0 on est sur le même mois
                    {
                        var mDate=td.getDay()-day;
                        if(mDate < 0)
                        {
                            age=age-1;
                        }

                    }
                }

                return age; // que l'on place dans le input d'id Age
            }

            function checkAgeEpoux(date_naiss) {

                var age = calculAge(date_naiss) // On calcule l'age de l'epoux

                if (age < 21) {
                    date_naiss.style.border = "1px solid #f00";
                    document.getElementById('msgAge1').style.display='block';
                }
                else {
                    date_naiss.style.border = "";
                    document.getElementById('msgAge1').style.display='none';
                }
            }

            function checkAgeEpouse(date_naiss) {

                var age = calculAge(date_naiss); // On calcule l'age de l'epouse

                if (age < 18) {
                    date_naiss.style.border = "1px solid #f00";
                    document.getElementById('msgAge2').style.display='block';
                }
                else {
                    date_naiss.style.border = "";
                    document.getElementById('msgAge2').style.display='none';
                }
            }

            /**
             *
             */
            function comparDate1()
            {
                var sdate1 = document.getElementById('datepicker-autoclose1').value;
                var date1 = new Date();

                date1.setFullYear(sdate1.substr(6,4));
                date1.setMonth(sdate1.substr(3,2));
                date1.setDate(sdate1.substr(0,2));
                date1.setHours(0);
                date1.setMinutes(0);
                date1.setSeconds(0);
                date1.setMilliseconds(0);

                var d1 = date1.getTime();

                var sdate2 = document.getElementById('datepicker-autoclose2').value;
                var date2 = new Date();

                date2.setFullYear(sdate2.substr(6,4));
                date2.setMonth(sdate2.substr(3,2));
                date2.setDate(sdate2.substr(0,2));
                date2.setHours(0);
                date2.setMinutes(0);
                date2.setSeconds(0);
                date2.setMilliseconds(0);

                var d2 = date2.getTime();

                //si la date de naissance est superieure a la date d'etablissement de l'acte on affiche un message d'erreur
                if(d1 > d2)
                {
                    alert('La date de délivrance de l\'acte ne peut pas être inferieure à celle de la date de naissance !');
                    document.getElementById('datepicker-autoclose2').value = "";
                    document.getElementById('datepicker-autoclose2').placeholder = "jj/mm/aaaa";
                }

            }

            function comparDate2()
            {
                var sdate1 = document.getElementById('datepicker-autoclose3').value;
                var date1 = new Date();

                date1.setFullYear(sdate1.substr(6,4));
                date1.setMonth(sdate1.substr(3,2));
                date1.setDate(sdate1.substr(0,2));
                date1.setHours(0);
                date1.setMinutes(0);
                date1.setSeconds(0);
                date1.setMilliseconds(0);

                var d1 = date1.getTime();

                var sdate2 = document.getElementById('datepicker-autoclose4').value;
                var date2 = new Date();

                date2.setFullYear(sdate2.substr(6,4));
                date2.setMonth(sdate2.substr(3,2));
                date2.setDate(sdate2.substr(0,2));
                date2.setHours(0);
                date2.setMinutes(0);
                date2.setSeconds(0);
                date2.setMilliseconds(0);

                var d2 = date2.getTime();

                //si la date de naissance est superieure a la date d'etablissement de l'acte on affiche un message d'erreur
                if(d1 > d2)
                {
                    alert('La date de délivrance de l\'acte ne peut pas être inferieure à celle de la date de naissance !');
                    document.getElementById('datepicker-autoclose4').value = "";
                    document.getElementById('datepicker-autoclose4').placeholder = "jj/mm/aaaa";
                }

            }

            //  Fonction verifiant la date de celbration du mariage
            function checkDateCelebration(elmt) {

                var sdate1 = elmt.value;

                var date = new Date();

                date.setFullYear(sdate1.substr(6,4));
                date.setMonth(sdate1.substr(3,2));
                date.setDate(sdate1.substr(0,2));
                date.setHours(0);
                date.setMinutes(0);
                date.setSeconds(0);
                date.setMilliseconds(0);

                var cel_date = date.getTime();

                var now = new Date();

                now.setHours(0);
                now.setMinutes(0);
                now.setSeconds(0);
                now.setMilliseconds(0);

                now.setDate(now.getDate()+93);

                var date_av = now.getTime();

                if (cel_date <= date_av) {
                    elmt.style.border = "1px solid #f00";
                    document.getElementById('msgDateCel').style.display='block';
                }
                else {
                    elmt.style.border = "";
                    document.getElementById('msgDateCel').style.display='none';
                }
            }

        </script>
        
    </body>

</html>
