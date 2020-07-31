<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SIFEC Mariages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL:: to( 'assets/images/acsi_5.png' ) }}">

    <!-- App css -->
    <link href="{{ URL:: to( 'assets/css/bootstrap.min.css' ) }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL:: to( 'assets/css/icons.css' ) }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL:: to( 'assets/css/style.css' ) }}" rel="stylesheet" type="text/css" />

    <script src="{{ URL:: to( 'assets/js/modernizr.min.js' ) }}"></script>
</head>
    <!-- End head-->

<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 card-box">
                        <div class="text-center">
                            <h2 class="text-uppercase m-t-0 m-b-30">
                                <a href="#" class="text-success">
                                    <span><img src="assets/images/logo_top_sifec.png" alt="" height="60"></span>
                                </a>
                            </h2>
                        </div>
                        <div class="account-content">

                        {{--================= Formulaire de connection ===================--}}
                            <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                                {!! csrf_field() !!}

                            {{--================= username ===================--}}

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="username_id">Nom d'utilisateur</label>
                                        <input name="username" type="text" class="form-control" id="username_id" required="">
                                    </div>
                                </div>

                            {{--================= password ===================--}}

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="password_id">Mot de passe</label>
                                        <input name="password" type="password" class="form-control" id="password_id" required="">
                                    </div>
                                </div>

                            {{--================= chekbox remember =========--}}

                                <div class="form-group m-b-30">
                                    <div class="col-xs-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">
                                                 Se souvenir de moi
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            <!--============== Bouton soumettre =============-->

                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn btn-md btn-primary btn-block" type="submit">Se connecter</button>
                                    </div>
                                </div>

                            </form>
                    <!-------------- fin formulaire ----------------->

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>



<!-- jQuery  -->
<script src="{{ URL:: to( 'assets/js/jquery.min.js' ) }}"></script>
<script src="{{ URL:: to( 'assets/js/popper.min.js' ) }}"></script>
<script src="{{ URL:: to( 'assets/js/bootstrap.min.js' ) }}"></script>
<script src="{{ URL:: to( 'assets/js/jquery.slimscroll.js' ) }}"></script>

<!-- App js -->
<script src="{{ URL:: to( 'assets/js/jquery.core.js' ) }}"></script>
<script src="{{ URL:: to( 'assets/js/jquery.app.js' ) }}"></script>