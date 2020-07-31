<?php
//echo sha1("admin");
//$userconnected = $this->session->userdata('util_prenom').' '.$this->session->userdata('util_nom');
//$droits = $this->session->userdata('droits');
//$type=$this->session->userdata('id_type');
//$this->load->helper('form');
//$this->session->userdata('ecole');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>SIFEC Version n&deg;1</title>

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

    <!-- DataTables -->
    <link href="{{URL::to('tools/asset/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/asset/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{URL::to('tools/asset/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Fin Datables-->
    <!-- Plugins css-->
    <link href="{{URL::to('tools/asset/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />

    <link href="{{URL::to('tools/asset/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

    <link href="{{URL::to('tools/asset/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/asset/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">

    <link href="{{URL::to('tools/asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />

    <link href="{{URL::to('tools/asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />

    <link href="{{URL::to('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />

    <link href="{{URL::to('assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet" />
    <!-- Summernote css -->
    <link href="{{URL::to('tools/asset/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />

    <!-- App css w3 -->
    <link href="{{ URL:: to( 'css/w3school/w3.css' ) }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{URL::to('tools/asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    {{--<link href="{{URL::to('tools/asset/scss/icons/material-design/materialdesignicons.scss')}}" rel="stylesheet" type="text/css" />--}}

    <link href="{{URL::to('tools/asset/css/icons.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/asset/css/style.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/asset/styles/apptext.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/asset/styles/appdesign.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{URL::to('tools/asset/js/modernizr.min.js')}}"></script>

    <script src="{{URL::to('tools/asset/js/vendor/jquery.js')}}"></script>

    <script src="{{URL::to('tools/angular/angular.js')}}"></script>

    <!-- Sweet Alert -->
    <link href="{{URL::to('tools/asset/plugins/sweet-alert2/sweetalert2.min.css')}}"
          rel="stylesheet" type="text/css" />

    <script src="{{URL::to('interface/web/js/visibility.js')}}"></script>

    <script src="{{URL::to('interface/web/js/date_heure.js')}}"></script>

    <script src="{{URL::to('tools/tiny_mce/tiny_mce.js')}}" type="text/javascript"></script>

    <link href="{{URL::to('ools/books/css/default.css')}}" rel="stylesheet" type="text/css"  />

    <link href="{{URL::to('tools/books/css/bookblock.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom demo style -->
    <link href="{{URL::to('tools/books/css/demo4.css')}}" rel="stylesheet" type="text/css"  />

    <link  href="{{URL::to('tools/books/css/default.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{URL::to('tools/books/css/bookblock.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom demo style -->
    <link  href="{{URL::to('tools/books/css/demo4.css')}}" rel="stylesheet" type="text/css" />
    <!--Css -->
    <link href="{{URL::to('tools/asset/css/map.css')}}" rel="stylesheet" type="text/css" />

    <script  src="{{URL::to('tools/graphe/analytics.js')}}" async=""></script>

    <script src="{{URL::to('tools/graphe/Chart.js')}}"></script>

    <script src="{{URL::to('tools/graphe//utils.js')}}"></script>

    <script src="{{URL::to('tools/books/js/modernizr.custom.js')}}"></script>

    <?php if(isset($use_tiny) && $use_tiny) { ?>
    <script type="text/javascript">
        tinyMCE.init({
            mode : "textareas",
            theme : "simple"
        });
    </script>

    <?php }  ?>

    <script src="{{URL::to('tools/graphe/Chart.js')}}"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $(".chargement").fadeOut("slow");
            $("#util_mdp").val('');
        })
    </script>

</head>

<body class="">

<div class="chargement" id="chargement" style="width:100%;">
    <div style="height:200px;"></div>
    <div class="row" >
        <div class="col-sm-12 text-lg-left"><span class="loader1 loader-quart" style="margin-left:500px; margin-top:40px;">
            </span><span style="color:green;font-size:36px;" class="txtLoader"><strong>Chargement...</strong></span>
        </div>
    </div>
    <div style="height:350px;"></div>
</div>

<header id="topnav" style="" class="fixed-top">
    <div class="topbar-main">
        <div class="container-fluid">

            <div class="navbar-custom">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="" style="margin-left:-40px;">
                            <a href="#"> <span></span>
                                <span class="txtColorWhite txtSizeLargeStrong">
                                <img src="{{URL::to('tools/asset/images/logo_top_sifec.png')}}" alt="" height="30" class="">
                            </span>
                            </a>
                        </li>
                        <?php //if($droits[71]=='1') {?>

                        <li class="has-submenu">
                            <a href="#"><span><i class="mdi mdi-apps "></i></span><span class="txtSizeRegular txtColorWhite"> R&eacute;f&eacute;rentiels </span> </a>
                            <ul class="submenu">

                                <li class="has-submenu">
                                    <a href="#">Régistres</a>
                                    <ul class="submenu">
                                        <?php ///if($type=='4' && $droits[9]=='1' ) {?>
                                        <li><a href="parametres/registres/liste">Régistres Naissances</a></li>
                                        <?php ///} ?>
                                        <li><a href="#">...</a></li>
                                    </ul>
                                </li>
                                <?php //if($droits[1]=='1') {?>
                                <li class="dropdown-divider"></li>
                                <li><a href="parametres/centre/liste">Centres</a></li>
                                <?php //} ?>
                                <?php //if($droits[5]=='1') {?>
                                <li class="dropdown-divider"></li>
                                <li><a href="#">Localités</a></li>
                                <?php //} ?>
                                <li class="dropdown-divider"></li>
                                <li><a href="#">Aide...</a></li>
                            </ul>
                        </li>

                        <?php //} ?>

                        <?php //if($droits[72]=='1') {?>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="mdi mdi-account-multiple"></i></span><span class="txtSizeRegular txtColorWhite">Naissances</span> </a>
                            <ul class="submenu">
                                <?php //if($type=='1' && $droits[21]=='1') {?>
                                <li><a href="naissance/declaration/liste">Emission D&eacute;clarations ...</a></li>
                                <?php //} ?>
                                <li class="dropdown-divider"></li>
                                <?php //if($type=='4' && $droits[21]==1) {?>
                                <li><a href="naissance/reception_declaration/liste">Reception D&eacute;clarations...</a></li>
                                <li class="dropdown-divider"></li>
                                <?php //} ?>
                                <?php //if($type=='4' && $droits[27]==1) {?>
                                <li><a href="naissance/acte/liste_acte">Actes ...</a></li>
                                <li class="dropdown-divider"></li>
                            <?php //} ?>
                            <!--<?php //if($type=='5' && $droits[29]==1) {?>
                                    <li><a href="#">D&eacute;clarations tardives...</a></li>
                                    <li class="dropdown-divider"></li>
                                <?php //} ?>-->

                                <li><a href="#"> ...</a></li>
                            </ul>
                        </li>
                        <?php //} ?>

                        <?php //if($droits[73]=='1') {?>

                        <li class="has-submenu">
                            <a href="#">
                                <span><i class="mdi mdi-account-switch"></i></span>
                                <span class="txtSizeRegular txtColorWhite">Mariages</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{ route('declaration.create') }}">Nouvelle déclaration</a></li>
                                <li class="dropdown-divider"></li>

                                <li><a href="{{ route('declaration.list') }}">Déclarations des mariages</a></li>
                                <li class="dropdown-divider"></li>

                                <li><a href="{{ route('registers.list') }}">Registres des mariages</a></li>
                                <li class="dropdown-divider"></li>

                                <li><a href="#">Livrets de famille</a></li>
                                <li class="dropdown-divider"></li>

                                <li><a href="#">Autres...</a></li>
                            </ul>
                        </li>
                        <?php  //}  ?>

                        <?php //if($droits[74]=='1') {?>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="mdi mdi-church"></i></span>
                                <span class="txtSizeRegular txtColorWhite">Décès</span>
                            </a>
                            <ul class="submenu">
                                <?php //if($droits[43]=='1') {?>
                                <li><a href="#">Emissions déclarations...</a></li>
                                <li class="dropdown-divider"></li>
                                <?php  //}  ?>
                                <?php //if(($type=='9' && $droits[47]==1) || ($type=='4' && $droits[47]==1)) {?>
                                <li><a href="deces/reception/liste">Reception D&eacute;clarations...</a></li>
                                <li class="dropdown-divider"></li>
                                <?php //} ?>
                                <?php //if($droits[47]=='1') {?>
                                <li><a href="deces/acte/liste_acte">Actes...</a></li>
                                <li class="dropdown-divider"></li>
                                <?php  //}  ?>
                                <li><a href="#">Autres...</a></li>
                            </ul>
                        </li>

                        <?php //}   ?>

                        <?php //if($droits[75]=='1') {?>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="mdi mdi-view-grid "></i></span><span class="txtSizeRegular txtColorWhite">Consultations</span> </a>
                            <ul class="submenu">
                                <li><a href="consultations/naissances/etats">Etats et Statistiques Naissances</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#">Etats et Statistiques Mariages</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#">Etats et Statistiques D&egrave;c&eacute;s</a></li>
                            </ul>
                        </li>

                        <?php //} ?>

                        <li class="has-submenu">
                            <a> <span> &nbsp;&nbsp; </span></a>
                        </li>

                        <?php //if($droits[76]=='1') {?>

                        <li class="has-submenu" >
                            <a href="#"> <span><i class="mdi mdi-brightness-7"></i></span><span class="txtSizeRegular txtColorWhite"> Paramètres </span> </a>
                            <ul class="submenu">
                                <?php //if($droits[76]=='1') {?>

                                <li class="has-submenu">
                                    <a href="#">Administration locale</a>
                                    <ul class="submenu" >
                                        <?php //if($droits[1]=='1') {?>
                                        <li class="txtColorGreen"><a href="parametres/utilisateur/liste" class="txtColorGreen">Utilisateurs</a></li>
                                        <?php //} ?>
                                        <li class="dropdown-divider"></li>
                                        <?php //if($droits[5]=='1') {?>
                                        <li><a href="parametres/profil/liste">Profils et Droits</a></li>
                                        <?php //} ?>
                                    </ul>
                                </li>

                                <?php //} ?>

                                <?php //if($droits[77]=='1') {?>

                                <li class="has-submenu">
                                    <a href="#">Administration nationale</a>
                                    <ul class="submenu" >
                                        <?php //if($droits[1]=='1') {?>
                                        <li class="txtColorGreen"><a href="parametres/utilisateur/ajouter2" class="txtColorGreen">Utilisateurs&nbsp;</a></li>
                                        <?php //} ?>
                                        <li class="dropdown-divider"></li>
                                        <?php //if($droits[5]=='1') {?>
                                        <li><a href="parametres/profil/liste">Profils et Droits</a></li>

                                        <li class="dropdown-divider"></li>

                                        <li><a href="Observation">Observateur</a></li>
                                        <?php //} ?>
                                    </ul>
                                </li>

            <?php //} ?>
            </ul>
            </li>
                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div>
            <!-- end navbar-custom -->

            <div class="menu-extras topbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle -->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 pro-user-name">
                                {{ Auth::user()->last_name }} {{ Auth::user()->first_name }}

                                @if(Auth::user()->role_id == 1)
                                    | Admin
                                @endif<i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="ti-power-off"></i> <span>Se déconnecter</span>
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


<!-- content -->
@yield( 'content' )
<!-- End content -->

<div class="" style="padding:50px;"></div>

<div class="divFooter bgFooter" style="padding-top:5px; padding-bottom:5px;">

    <div class="row">
        <div class="col-sm-1 text-lg-left" style="">
            <a tabindex="0"  data-toggle="popover" data-placement="top" data-trigger="focus"
               title="" data-content="Profil:&nbsp;<?php //echo $this->session->userdata('profil') ?>" data-original-title="Infos Utilisateur">
                &nbsp;&nbsp;&nbsp;&nbsp;<i class=" mdi mdi-account-circle" style="color:black; font-size:60px;"></i>
            </a>
            <br>
        </div>

        <div class="col-sm-4 text-lg-left" style="color: white; border-right:groove">
            <h6 id="reaparait8" class="text-overflow m-0 text-lg-left" >
                Utilisateur:&nbsp; {{ Auth::user()->last_name }} {{ Auth::user()->first_name }}
            </h6>
            <h6 id="reaparait5" class="text-overflow m-0 text-lg-left" >
                Centre de Connexion:&nbsp;&nbsp;{{ $centre->designation }} - {{ $centre->department }}
            </h6>
        </div>

        <div class="col-sm-6">
            <h6 align="center"  class="txtSizeRegular" style="margin-top:5px; margin-bottom: 5px; font-color:white; color:white ">
                <br>&copy;&nbsp;SIFEC: SYSTEME INTEGRE DES FAITS D'ETAT CIVIL - Copyright ACSI 2018
            </h6>

        </div>
    </div>

</div>
<!-- End Footer -->

{{--</div>--}}

<script>

    $(document).ready(function() {

        $('#date_decl1').on('change', function(e) {
            // e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

            //  var $this = $(this); // L'objet jQuery du formulaire
            //Initialisation du select
            //  var select='';

            //var choix =$('#fournisseurId').val();
            alert(445);
            $.ajax({
                url: '{{url('ajax_contrat')}}', // Le nom du fichier indiqué dans le formulaire
                //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
                data: 'fournisseur='+ choix, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                dataType:
                    'json',
                success: function(json) { // Je récupère la réponse du fichier PHP
                    $.each(json, function(index, value) {
                        alert(value.code_fou);
                        $("#codefou").attr('value',value.code_fou);
                    });

                }
            });
        });


    });

</script>

<?php if(isset($use_angular) && $use_angular && !empty($liste_naissances)){
$num_ordre=0;
?>
<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {

        <?php foreach($liste_naissances as $k => $v)
            {
            ?>

            $scope.doc<?php echo $num_ordre ?> = "EN";

        <?php
        echo $num_ordre=$num_ordre + 1;
        }
        ?>
    });
</script>

<?php } ?>
<!-- End Wrapper -->
<!-- jQuery  -->
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
<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.min.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.time.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.resize.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.pie.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.selection.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.stack.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.orderBars.min.js')}}"></script>

<script src="{{URL::to('tools/asset/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

<script src="{{URL::to('tools/asset/pages/jquery.flot.init.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script  src="{{URL::to('tools/asset/plugins/jquery-knob/excanvas.js')}}"></script>
<![endif]-->
<script src="{{URL::to('tools/asset/plugins/jquery-knob/jquery.knob.js')}}"></script>

<!-- App js -->


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
    function display()
    {
        if(document.getElementById('checkID').checked) {
            document.getElementById('filID').style.display='block';
        }
        else {
            document.getElementById('filID').style.display='none';
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
    function ShowHideDiv() {
        var chkMono = document.getElementById("chkMono");
        // var libReg = document.getElementById("libReg");
        var chkPoly = document.getElementById("chkPoly");
        var regimeMono = document.getElementById("dvMono");
        var regimePoly = document.getElementById("dvPoly");
        // var chkOption = document.getElementsByName("option_matrimoniale");

        if (chkMono.checked) {
                regimeMono.style.display="block";
                // libReg.style.display="block";
                regimePoly.style.display="none";
        }
        if(chkPoly.checked){
            regimeMono.style.display="none";
            // libReg.style.display="block";
            regimePoly.style.display="block";
        }

        // regime.style.display = chkMono.checked ? "block" : "none";
    }
</script>

</body>

</html>
