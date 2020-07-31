@extends('/layouts/layout1')

@include('/layouts/navigation')

@section('content')


<div class="bgRoadZone hide-for-small-only" style="padding-top:90px; padding-bottom:5px; background-color: #FAFAD2">

    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-sm-12 txtSizeRegular txtColorGreen text-left">
                    Naissances <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i></span>D&eacute;claration Naissance <span class="txtColorGrey"><i class="ti-angle-double-right txtColorRed"></i> </span>
                    <?php  if (isset($vue) && $vue=='ajout') { ?>
                    Ajout D&eacute;claration...
                    <?php } ?>

                    <?php  if (isset($vue) && $vue=='liste') { ?>
                    Liste D&eacute;claration...
                    <?php } ?>
                    <?php  if (isset($vue) && ($vue=='detail' || $vue=='modif')) { ?>
                    Modifications / D&eacute;tails...
                    <?php    } ?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="wrapper "  style="background-color: white;">

    <div class="container-fluid">
        <!-- /Debut Ajout/ -->
        <div class="row" style="padding-bottom:5px;">

            <div class="col-sm-6  txtColorDark txtSizeLarge2 text-left">
                        <span class="badge  badge-success" style="heightpx;">
                                <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Nouvelle D&eacute;claration de naissance</strong>
                        </span>
            </div>

            <div class="col-sm-6  txtSizeRegular text-right">

                <ul class="btn-group right" style="list-style: none;">

                    <?php //if($droits[22]=='1'){   ?>

                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark"><a href="naissance/declaration/ajout"><i class="mdi mdi-autorenew" style="font-size:30px; color:green"></i></a> <a href="naissance/declaration/ajout">Rafra&icirc;chir le formulaire</a></li>
                    <?php //} ?>
                    <?php //if($droits[21]=='1'){   ?>

                    <li style="padding-left:20px;" class="txtSizeRegular txtColorDark"><a href="naissance/declaration/liste"><i class="mdi mdi-file-document-box" style="font-size:30px; color:green"></i></a> <a href="naissance/declaration/liste">Lister des d&eacute;clarations...</a></li>
                    <?php //} ?>
                </ul>
            </div>
        </div>

        <div class="bgColorSite" style="height:1px;"></div>

        <div class="bgOblicLigne1" style="height:6px;"></div>

        <div class="lineEspace"></div>
        <!--Debut  du formulaire-->
        <div class="row" style="">

        </div>
    </div>


    <div class="container-fluid">
        <!-- /Debut Ajout/ -->
        <div class="row" style="padding-bottom:5px;">

            <div class="col-sm-6  txtColorDark txtSizeLarge2 text-left">
                        <span class="badge  badge-success" style="heightpx;">
                                <strong style="text-shadow: 2px 2px 4px #006400;font-size:13px;">Nouvelle D&eacute;claration de naissance</strong>
                        </span>
            </div>

            <div class="col-sm-6  txtSizeRegular text-right">

                <ul class="btn-group right" style="list-style: none;">

                    <?php // // if($droits[22]=='1'){   ?>

                    <li style="padding-left:10px;" class="txtSizeRegular txtColorDark"><a href="naissance/declaration/ajout"><i class="mdi mdi-autorenew" style="font-size:30px; color:green"></i></a> <a href="naissance/declaration/ajout">Rafra&icirc;chir le formulaire</a></li>
                    <?php // // } ?>
                    <?php // // if($droits[21]=='1'){   ?>

                    <li style="padding-left:20px;" class="txtSizeRegular txtColorDark"><a href="naissance/declaration/liste"><i class="mdi mdi-file-document-box" style="font-size:30px; color:green"></i></a> <a href="naissance/declaration/liste">Lister des d&eacute;clarations...</a></li>
                    <?php // // } ?>
                </ul>
            </div>
        </div>

        <div class="bgColorSite" style="height:1px;"></div>

        <div class="bgOblicLigne1" style="height:6px;"></div>

        <div class="lineEspace"></div>
        <!--Debut  du formulaire-->
        <div class="row" style="">
            <?php // // if(isset($resultat) && $resultat=='IN') { ?>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">

                        <?php // //$action_realisee = 'Ajout effectué avec succès...';$action_suivante = '';
                        ?>

                        <div class="txtSizeRegular text-center" style="padding-top:40px; padding-bottom:50px;">
                            <div class="" style="padding-bottom:5px;"><span class="txtColorGreen" ><i class="mdi mdi-check-circle"  style="font-size:180px;"></i></span></div>
                            <div class="txtColorGreen txtSizeMedium"><strong><?php // // echo $action_realisee; ?></strong></div>
                            <div class="txtSizeRegular txtColorGreen">Que souhaitez-vous faire en suite ?</div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-3">

                        <div class="bgOblicLigne1" style="height:6px;"></div>
                        <div style="padding-top:15px;">
                            <a href="naissance/declaration/ajout">
                                <i class=" mdi mdi-plus-circle" style="font-size:45px; color:green"></i>&nbsp;&nbsp;
                                <strong class="txtSizeMedium txtColorDark">d&eacute;claration...</strong>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-3">

                        <div class="bgOblicLigne1" style="height:6px;"></div>
                        <div style="padding-top:15px;">
                            <a href="naissance/declaration/envoyer/<?php // // echo $donnees['id_decl'] ?>"><i class="mdi mdi-launch" style="font-size:45px;color:green""></i>
                                &nbsp;&nbsp;
                                <strong class="txtSizeMedium txtColorDark">Envoyer la d&eacute;claration...</strong></a>
                        </div>

                    </div>

                    <div class="col-sm-3">

                        <div class="bgOblicLigne1" style="height:6px;"></div>

                        <div style="padding-top:15px;">

                            <a href="naissance/declaration/liste">
                                <i class="mdi mdi-file-document-box" style="font-size:45px; color:green"></i>&nbsp;&nbsp;
                                <strong class="txtSizeMedium txtColorDark">Liste d&eacute;clarations...</strong>
                            </a>

                        </div>

                    </div>

                    <div class="col-sm-3"><div class="bgOblicLigne1" style="height:6px;"></div>

                        <div style="padding-top:15px;">

                            <a href="declaration_ctr/generer_declaration/<?php // // echo $donnees['id_decl'] ?>">
                                <i class="mdi mdi-printer " style="font-size:45px; color:green"></i>&nbsp;&nbsp;
                                <strong class="txtSizeMedium txtColorDark">Imprimer la d&eacute;claration...</strong>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
            <?php // //  }  else { ?>
            <div class="col-sm-9">
                <!--<div class="m-t-30">-->
                <div class="">

                    <ul class="nav nav-pills navtab-bg tabs-bordered">
                        <li class="nav-item">
                            <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                Informations Marié...
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Informations  Mariée...
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                Témoins des mariés...
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Informations complémentaires...
                            </a>
                        </li>
                    </ul>

                    <?php // // if(isset($errors) && !empty($errors)) { ?>

                    <div class="alert alert-danger" id="disparait">
                        <strong><?php // // echo $message='Echec enregistrement';?></strong>
                    </div>
                <?php // // } ?>
                <!--Debut du formulaire -->
                    <form class="form-horizontal" method="post" action="declaration_ctr/ajout_declaration">

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="home1">
<!--                                --><?php //// //
//                                $add_char = $this->app_model->randomVar(2); $set_id_decl = 'DECL'.date("YmdHis").$add_char;
//                                $data_form=array(
//                                    'type'=>'hidden',
//                                    'name'=>'id_decl',
//                                    'id'=>'evalid',
//                                    'readonly'=>'',
//                                    'value'=>$set_id_decl
//                                );
//                                echo form_input($data_form);
//                                ?>
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations Centre Etat Civil</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>&nbsp;Centre d'etat civil</label>
                                    </div>
                                    <div class="col-sm-6 end text-left">

                                        <select class="form-control"  name="centre_decl" required>
                                            <option></option>
                                            <?php // //
                                            //foreach($liste_centres as $k => $v){
                                            ?>
                                            <option value="<?php // // echo $v['id_ctre'] ?>  <?php // // if($v['id_ctre']==set_value('centre_decl')) ?>"><?php // // echo $v['libelle_ctre'] ?>/&nbsp;<?php // // echo $v['nom_agent']; ?></option>
                                            <?php // //
                                            //}
                                            ?>
                                        </select>

                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <div id="disparait1">
                                            <span class="txtColorRed"><?php // // echo form_error('centre_decl'); ?></span>
                                        </div>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations du marié...</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="nom_epoux" class="form-control" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('nombre_enf_compris'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="date_naiss_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('date_naiss_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="acte_naiss_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('acte_naiss_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="nationalite_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nationalite_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('nationalite_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Domicile:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('adresse_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('adresse_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Domicile:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('adresse_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('adresse_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Fils de (noms et prénoms du père):</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="parent1_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('parent1_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('parent1_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Informations de la mariée...</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Nom(s):</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="nom_epoux" class="form-control" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('nombre_enf_compris'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Date de naissance:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="date_naiss_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('date_naiss_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Acte de naissance N°:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="acte_naiss_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nombre_enf_compris');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('acte_naiss_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Nationalité:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="nationalite_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('nationalite_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('nationalite_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Domicile:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('adresse_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('adresse_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Domicile:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="adresse_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('adresse_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('adresse_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Fils de (noms et prénoms du père):</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end">
                                        <input type="text" name="parent1_epoux" class="form-control" id="datepicker-autoclose" value="<?php // //  echo set_value('parent1_epoux');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait16"><?php // // echo form_error('parent1_epoux'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade " id="profile1">

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Renseignements concernant le p&egrave;re de l'enfant...</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>&nbsp;Nom du p&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="nom_p_dcl" class="form-control" id="nom_p_dcl" value="<?php // //  echo set_value('nom_p_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait17"><?php // // echo form_error('nom_p_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Pr&eacute;nom du p&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="prenom_p_dcl" class="form-control" id="prenom_p_dcl" value="<?php // //  echo set_value('prenom_p_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait18"><?php // // echo form_error('prenom_p_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div>
                                    <div class="row">
                                        <div class="col-sm-4 offset-lg-0 text-lg-right">
                                            <label for="date_decl"><span class="txtColorRed">*</span>&nbsp;Date de naissance du p&egrave;re:</label>
                                        </div>

                                        <div class="col-sm-4 end text-lg-left">
                                            <div class="input-group">
                                                <input type="text" name="date_nais_p" class="form-control" placeholder="jour/mois/yy" id="date_nais_p" value="<?php // //  echo set_value('date_nais_p');?>">
                                                <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                            </div>
                                            <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait19"><?php // // echo form_error('date_nais_p'); ?></span>
                                            <?php // // } ?>

                                            <span class="txtColorRed" id="invisible3">Cette date est sup&eacute;rieure &agrave; la date du jour </span>

                                            <span class="txtColorRed" id="invisible4">Cette date est sup&eacute;rieure &agrave; la date de naissance de l'enfant </span>



                                        </div>

                                        <div class="col-sm-4 end text-lg-left" id="avertissementage">
                                            <div class="row">
                                                <div class="col-sm-12 text-lg-center">
                                                    <div class="txtColorRed"><i class="mdi mdi-alert" style="font-size:35px;"></i> </div>
                                                    <div class="txtSizeRegular txtColorGreen"><h6>Voulez-vous confirmer cette date?</h6></div>
                                                    <div class="txtSizeRegular" style="color:black; font-size:16px;">Ecart d'&acirc;ge  n'est que <span id="demo"></span> avec l'enfant</div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 text-lg-center">
                                                    <button type="button" name="" class="btn btn-success txtSizeLarge2" onclick="ConfirmerAgep()">
                                                        Confirmer &nbsp;<i style="color:white;" class=" mdi mdi-email-outline"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger" onclick="AnnulerAgep()">Annuler&nbsp;<i class="mdi mdi-close-box-outline " style="color:white;"></i>&nbsp;</button>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 offset-lg-4 text-lg-left" style="background-color:;">

                                        </div>
                                    </div>

                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-4 offset-lg-0 text-lg-right">
                                            <label for="email"><span class="txtColorRed">*</span>Lieu de naissance du p&egrave;re:</label>
                                        </div>

                                        <div class="col-sm-4 end text-lg-left">
                                        <!-- <input type="text" name="lieu_nais_p" class="form-control" id="lieu_nais_p" value="<?php // //  echo set_value('lieu_nais_p');?>">
                                                       -->
                                            <select class="form-control select3" name="lieu_nais_p" style="width:80%">
                                                <option><?php // //  echo set_value('lieu_nais_p');?></option>

                                                <optgroup label="BRAZZAVILLE">
                                                    <option>BRAZZAVILLE</option>

                                                </optgroup>

                                                <optgroup label="KOUILOU">
                                                    <option>Pointe-noire</option>

                                                </optgroup>

                                                <optgroup label="Sangha">
                                                    <option>Ouesso</option>
                                                    <option>Souanke</option>
                                                    <option>Sembe</option>

                                                </optgroup>

                                                <optgroup label="BOUENZA">
                                                    <option>Nkayi</option>
                                                    <option>Loutete</option>
                                                    <option>Sembe</option>

                                                </optgroup>

                                                <optgroup label="Kouilou">
                                                    <option>Hinda</option>
                                                    <option>Kakamoéka</option>
                                                    <option> Madingo-Kayes</option>
                                                    <option> Mvouti</option>
                                                    <option>Nzambi</option>
                                                    <option> Tchamba Nzassi</option>
                                                </optgroup>

                                                <optgroup label="POINTE-NOIRE">
                                                    <option>POINTE-NOIRE</option>

                                                </optgroup>

                                                <optgroup label="CUVETTE">
                                                    <option>Boundji</option>
                                                    <option>Loukoléla</option>
                                                    <option>Makoua</option>
                                                    <option>Mossaka</option>
                                                    <option> Ngoko</option>
                                                    <option>  Ntokou</option>
                                                    <option>Owando</option>
                                                    <option>Oyo (Congo)</option>
                                                    <option>Tchikapika</option>
                                                </optgroup>

                                            </select>

                                            <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait20"><?php // // echo form_error('lieu_nais_p'); ?></span>
                                            <?php // // } ?>
                                        </div>
                                    </div>

                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-4 offset-lg-0 text-lg-right">
                                            <label for="email"><span class="txtColorRed">*</span>Profession du p&egrave;re:</label>
                                        </div>

                                        <div class="col-sm-3  text-lg-left end">
                                        <!--<input type="text" name="profession_decl" class="form-control" id="profession_decl" value="<?php // //  echo set_value('profession_decl');?>">-->
                                            <select name="profession_p_decl" class="form-control" id="profession2">
                                                <option><?php // //  echo set_value('profession_p_decl');?></option>
                                                <?php // //
                                                //foreach($liste_profession as $k => $t)
                                                //{
                                                ?>
                                                <option><?php // // echo $t['libelle'];?></option>
                                                <?php // //
                                                //}
                                                ?>
                                                <option>Autre</option>
                                            </select>
                                            <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait9"><?php // // echo form_error('profession_p_decl'); ?></span>
                                            <?php // // } ?>
                                        </div>

                                        <div class="col-sm-1 text-lg-right end" id="preciserlabel2">
                                            <label for="profession_p_decl"><span class="txtColorRed"></span>&nbsp;Pr&eacute;ciser:</label>
                                        </div>

                                        <div class="col-sm-3 text-lg-left end" id="preciser2">

                                            <input type="text" name="profession_p_decl" class="form-control"  value="<?php // //  echo set_value('profession_p_decl');?>" id="profession2Value">
                                            <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait4"><?php // // echo form_error('profession_p_decl'); ?></span>
                                            <?php // // } ?>
                                        </div>
                                    </div>

                                    <div class="lineEspace"></div>

                                    <div class="row">
                                        <div class="col-sm-4 offset-lg-0 text-lg-right">
                                            <label for="email"><span class="txtColorRed">*</span>Nationalit&eacute; du p&egrave;re:</label>
                                        </div>

                                        <div class="col-sm-6 text-lg-left">
                                        <!--<input type="text" name="nationalite_p_decl" class="form-control" id="nationalite_p_decl" value="<?php // //  echo set_value('nationalite_p_decl');?>">-->
                                            <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait22"><?php // // echo form_error('nationalite_p_decl'); ?></span>
                                            <?php // // } ?>
                                            <select name="nationalite_p_decl" class="form-control select7" id="nationalite_p_decl" value="<?php // //  echo set_value('nationalite_p_decl');?>" style="width: 60%">
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
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Niveau d'instruction:</label>
                                    </div>
                                    <div class="col-sm-3 text-lg-left end">
                                    <!--<input type="text" name="niveau_p_inst" class="form-control" id="niveau_p_inst" value="<?php // //  echo set_value('niveau_p_inst');?>">
                                                <?php // // if(isset($errors) && !empty($errors)) { ?>
                                            <span class="txtColorRed" id="disparait23"><?php // // echo form_error('niveau_p_inst'); ?></span>
                                                <?php // // } ?>-->
                                        <select name="niveau_p_inst" class="form-control" id="">
                                            <option><?php // //  echo set_value('niveau_p_inst');?></option>
                                            <?php // //
                                            //foreach($liste_niveau as $k => $t)
                                            //{
                                            ?>
                                            <option><?php // // echo $t['libelle'];?></option>
                                            <?php // //
                                            //}
                                            ?>
                                        </select>
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait23"><?php // // echo form_error('niveau_p_inst'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Domicile du p&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="domicile_p_decl" class="form-control" id="domicile_p_decl" value="<?php // //  echo set_value('domicile_p_decl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait24"><?php // // echo form_error('domicile_p_decl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>
                            </div>

                            <div class="tab-pane fade" id="messages1">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Renseignements concernant la m&egrave;re de l'enfant...</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>



                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>&nbsp;Nom de la m&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="nom_m_dcl" class="form-control" id="nom_m_dcl" value="<?php // //  echo set_value('nom_m_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait25"><?php // // echo form_error('nom_m_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Pr&eacute;nom de la m&egrave;re:</label>
                                    </div>
                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="prenom_m_dcl" class="form-control" id="prenom_m_dcl" value="<?php // //  echo set_value('prenom_m_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait26"><?php // // echo form_error('prenom_p_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">

                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="date_decl"><span class="txtColorRed">*</span>Date de naissance de la m&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-4 end text-lg-left">
                                        <div class="input-group">
                                            <input type="text" name="date_nais_m" class="form-control" placeholder="jour/mois/yy" id="date_nais_m" value="<?php // //  echo set_value('date_nais_m');?>">
                                            <span class="input-group-addon bg-success b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                        </div>
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait27"><?php // // echo form_error('date_nais_m'); ?></span>
                                        <?php // // } ?>

                                        <span class="txtColorRed" id="invisible5">Cette date est sup&eacute;rieure &agrave; la date du jour </span>

                                        <span class="txtColorRed" id="invisible6">Cette date est sup&eacute;rieure &agrave; la date de naissance de l'enfant </span>


                                    </div>

                                    <div class="col-sm-4 end text-lg-left" id="avertissementage2">
                                        <div class="row">
                                            <div class="col-sm-12 text-lg-center">
                                                <div class="txtColorRed"><i class="mdi mdi-alert" style="font-size:35px;"></i> </div>
                                                <div class="txtSizeRegular txtColorGreen"><h6>Voulez-vous confirmer cette date?</h6></div>
                                                <div class="txtSizeRegular" style="color:black; font-size:16px;">Ecart d'&acirc;ge  n'est que <span id="demoM"></span> avec l'enfant</div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 text-lg-center">
                                                <button type="button" name="" class="btn btn-success txtSizeLarge2" onclick="ConfirmerAgem()">
                                                    Confirmer &nbsp;<i style="color:white;" class=" mdi mdi-email-outline"></i>
                                                </button>

                                                <button type="button" class="btn btn-danger" onclick="AnnulerAgem()">Annuler&nbsp;<i class="mdi mdi-close-box-outline " style="color:white;"></i>&nbsp;</button>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Lieu de naissance de m&egrave;re::</label>
                                    </div>

                                    <div class="col-sm-6  end">
                                    <!-- <input type="text" name="lieu_nais_p" class="form-control" id="lieu_nais_p" value="<?php // //  echo set_value('lieu_nais_p');?>">
                                               -->
                                        <select class="form-control select3" name="lieu_nais_m" style="width:80%">
                                            <option><?php // //  echo set_value('lieu_nais_p');?></option>

                                            <optgroup label="Brazzaville">
                                                <option>Brazzaville </option>
                                            </optgroup>

                                            <optgroup label="KOUILOU">
                                                <option>Pointe-noire</option>

                                            </optgroup>

                                            <optgroup label="Sangha">
                                                <option>Ouesso</option>
                                                <option>Souanke</option>
                                                <option>Sembe</option>

                                            </optgroup>

                                            <optgroup label="Bouenza">
                                                <option>Nkayi</option>
                                                <option>Loutete</option>
                                                <option>Sembe</option>

                                            </optgroup>

                                            <optgroup label="Kouilou">
                                                <option>Hinda</option>
                                                <option>Kakamoéka</option>
                                                <option> Madingo-Kayes</option>
                                                <option> Mvouti</option>
                                                <option>Nzambi</option>
                                                <option> Tchamba Nzassi</option>
                                            </optgroup>

                                            <optgroup label="Cuvette">
                                                <option>Boundji</option>
                                                <option>Loukoléla</option>
                                                <option>Makoua</option>
                                                <option>Mossaka</option>
                                                <option> Ngoko</option>
                                                <option>  Ntokou</option>
                                                <option>Owando</option>
                                                <option>Oyo (Congo)</option>
                                                <option>Tchikapika</option>
                                            </optgroup>
                                            <option>Autre</option>
                                        </select>

                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait20"><?php // // echo form_error('lieu_nais_m'); ?></span>
                                        <?php // // } ?>

                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Profession de la m&egrave;re::</label>
                                    </div>

                                    <div class="col-sm-3  text-lg-left end">
                                    <!--<input type="text" name="profession_decl" class="form-control" id="profession_decl" value="<?php // //  echo set_value('profession_decl');?>">-->
                                        <select name="profession_m_decl" class="form-control" id="profession3">
                                            <option><?php // //  echo set_value('profession_m_decl');?></option>
                                            <?php // //
                                            //foreach($liste_profession as $k => $t)
                                            //{
                                            ?>
                                            <option><?php // // echo $t['libelle'];?></option>
                                            <?php // //
                                            //}
                                            ?>
                                            <option>Autre</option>
                                        </select>
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait9"><?php // // echo form_error('profession_m_decl'); ?></span>
                                        <?php // // } ?>
                                    </div>

                                    <div class="col-sm-1 text-lg-right end" id="preciserlabel3">
                                        <label for="profession_m_decl"><span class="txtColorRed"></span>&nbsp;Pr&eacute;ciser:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left end" id="preciser3">

                                        <input type="text" name="profession_m_decl" class="form-control"  value="<?php // //  echo set_value('profession_m_decl');?>" id="profession3Value">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait4"><?php // // echo form_error('profession_m_decl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Nationalit&eacute; de la m&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                    <!--<input type="text" name="nationalite_m_decl" class="form-control" id="nationalite_m_decl" value="<?php // //  echo set_value('nationalite_m_decl');?>">-->
                                        <select name="nationalite_m_decl" class="form-control select8" id="nationalite_m_decl" value="<?php // //  echo set_value('nationalite_m_decl');?>" style="width: 60%">
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

                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait30"><?php // // echo form_error('nationalite_m_decl'); ?></span>
                                        <?php // // } ?>

                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Niveau d'instruction:</label>
                                    </div>

                                    <div class="col-sm-3 text-lg-left">

                                        <select name="niveau_m_inst" class="form-control" id="">
                                            <option><?php // //  echo set_value('niveau_m_inst');?></option>
                                            <?php // //
                                            //foreach($liste_niveau as $k => $t)
                                            //{
                                            ?>
                                            <option><?php // // echo $t['libelle'];?></option>
                                            <?php // //
                                            //}
                                            ?>
                                        </select>

                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait31"><?php // // echo form_error('niveau_m_inst'); ?></span>
                                        <?php // // } ?>

                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>Domicile de la m&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="domicile_m_decl" class="form-control" id="domicile_m_decl" value="<?php // //  echo set_value('domicile_m_decl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait32"><?php // // echo form_error('domicile_m_decl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                            </div>

                            <div class="tab-pane fade" id="home2">
                                <div class="row">
                                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                                        <span class="txtColorGrey txtSizeLarge2"><u>Renseignements concernant la m&egrave;re de l'enfant...</u></span>&nbsp
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed">*</span>&nbsp;Nom de la m&egrave;re:</label>
                                    </div>

                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="nom_m_dcl" class="form-control" id="nom_m_dcl" value="<?php // //  echo set_value('nom_m_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait25"><?php // // echo form_error('nom_m_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                                <div class="lineEspace"></div>

                                <div class="row">
                                    <div class="col-sm-4 offset-lg-0 text-lg-right">
                                        <label for="email"><span class="txtColorRed"></span>&nbsp;Pr&eacute;nom de la m&egrave;re:</label>
                                    </div>
                                    <div class="col-sm-6 text-lg-left">
                                        <input type="text" name="prenom_m_dcl" class="form-control" id="prenom_m_dcl" value="<?php // //  echo set_value('prenom_m_dcl');?>">
                                        <?php // // if(isset($errors) && !empty($errors)) { ?>
                                        <span class="txtColorRed" id="disparait26"><?php // // echo form_error('prenom_p_dcl'); ?></span>
                                        <?php // // } ?>
                                    </div>
                                </div>

                            </div>

                        </div>

                </div>

                <div class="lineEspace"></div>

                <div class="bgOblicLigne1" style="height:6px;"></div>

                <div class="lineEspace"></div>

                <div class="row">
                    <div class="col-sm-8 offset-lg-4 text-lg-left">
                        <button type="submit" class="btn btn-success txtSizeLarge2">Enr&eacute;gistrer &nbsp;<i class="mdi mdi-content-save "></i>
                        </button>
                    </div>
                </div>
                </form>
                <!--Fin du formulaire -->
            </div>
            <!--</div>-->
            <?php // // } ?>
            <div class="col-lg-3">
                <div style="border-left:#006633 solid 0.5px; padding-left:20px; margin-top:30px;">

                    <div class="txtSizeMedium txtColorGrey text-left" style="padding-top:10px;">
                        <strong>...</strong>
                    </div>
                    <div class="txtSizeRegular txtColorGrey" style="padding-bottom:5px;">
                    </div>
                    <span class="badge badge-warning">Info Centre</span><br>
                    <?php // // //echo uri_string(current_url()); ?>
                    <span class="txtSizeRegular txtColorGrey">Lib&eacute;ll&eacute; centre:</span><span class="txtSizeRegular txtColorBlack"><?php // // echo $this->session->userdata('util_ctre') ?></span>

                    <div style="height:10px;"></div>

                    <span class="txtSizeRegular txtColorGrey">Type centre:</span><span class="txtSizeRegular txtColorBlack"><?php // // echo $this->session->userdata('libelle_type') ?></span>

                    <div style="height:10px;"></div>

                    <span class="txtSizeRegular txtColorGrey">D&eacute;gr&eacute; centre:</span><span class="txtSizeRegular txtColorBlack"><?php // // echo $this->session->userdata('degre_ctre') ?></span>

                </div>

                <!--Fin du formulaire-->

            </div>
        </div>
    </div>


@endsection