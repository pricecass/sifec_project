
/**
* Theme: SimpleAdmin Template
* Author: Coderthemes
* Form Advanced
*/

// Select2
$(".select2").select2();
$(".select3").select2();
$(".select4").select2();
$(".select6").select2();
$(".select5").select2();
$(".select7").select2();
$(".select8").select2();

//Elements a cacher....

$("#cache").hide();

$("#util_mdp").empty();

$("#cache2").hide();

$("#invisible").hide();

$("#invisible0").hide();

$("#invisible2").hide();

$("#invisible3").hide();

$("#invisible4").hide();

$("#invisible5").hide();

$("#invisible6").hide();

$("#invisible7").hide();

$("#invisible8").hide();

$("#invisible10").hide();

$("#invisible11").hide();

$("#invisible12").hide();

$("#invisible13").hide();

$("#preciser").hide();

$("#avertissementage").hide();

$("#avertissementage2").hide();

$("#avertissementage4").hide();

$("#preciser1").hide();

$("#preciser2").hide();

$("#preciser3").hide();

$("#reaparait").hide();

$("#reaparait1").hide();

$("#preciserlabel").hide();

$("#preciserlabel1").hide();

$("#preciserlabel2").hide();

$("#preciserlabel3").hide();

$("#disparait").fadeOut(7000);

$("#reaparait").fadeIn(9500);

$("#reaparait1").fadeIn(9500);

$('#mariageoui').click(function (e) {

    $("#cache2").show();

});

$('#degreparente_decl').change(function (e) {
    var parente=$("#degreparente_decl").val();
  if(parente!='Pere'){
      $("#cache").show();
  }

  if(parente=='Autre') { $("#preciserlabel").show();  $("#preciser").show(); }
  //else
    if(parente=='Pere'){
        $("#cache").hide(); $("#preciserlabel").hide();  $("#preciser").hide();

        $("#degreparente").attr("name", "inconnu");
    }

    if( parente!='Autre'){

        $("#degreparente").attr("name", "inconnu");
    }
});

$('#profession1').change(function (e) {
    var profession=$("#profession1").val();
    //
    if(profession=='Autre') { $("#preciserlabel1").show();  $("#preciser1").show(); $("#profession1").attr("name", "inconnu"); }
    //else
    else {
        $("#preciserlabel1").hide();  $("#preciser1").hide();
        $("#profession1Valu").attr("name", "inconnu");
    }
});

$('#profession2').change(function (e) {
    var profession=$("#profession2").val();

    if(profession=='Autre') { $("#preciserlabel2").show();  $("#preciser2").show(); }
    //else
    else {
        $("#preciserlabel2").hide();  $("#preciser2").hide();
        $("#profession2Value").attr("name", "inconnu");
    }

});

$('#profession3').change(function (e) {
    var profession=$("#profession3").val();

    if(profession=='Autre') { $("#preciserlabel3").show();  $("#preciser3").show(); }
    //else
    else {
        $("#preciserlabel3").hide();  $("#preciser3").hide();
        $("#profession3Value").attr("name", "inconnu");
    }

});

$('#mariagenon').click(function (e) {
    $("#cache2").hide();
    $("#type").attr("value", null);
});

$('#date_decl1').change(function (e)
{

    var date =$('#date_decl1').val();

    $("#datepicker").val('');

    $("#invisible0").hide();
    //alert(date);
    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:'json',

        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                //alert(value);
                $("#date_decl1").val('');

                $("#invisible0").show();
            });
        }
    });
});

$('#datepicker').change(function (e)
{
    $("#invisible").hide();

    $("#invisible2").hide();

    var date =$('#datepicker').val();

    var date1 =$('#date_decl1').val();
    // alert(date);
    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
              //  alert(value);
                //$("#datepicker").attr('value','');
                $("#invisible").show();

                $("#datepicker").val('');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie1='+date+'&dateSaisie2='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0'){

                    if(value!=='')
                    {
                       // alert(value);
                        // $("#datepicker").attr('value','');
                        $("#invisible2").show();

                        $("#datepicker").val('');
                    }
                }
            });
        }
    });
});


$('#date_nais_m').change(function (e)
{
    var date =$('#date_nais_m').val();

    var date1 =$('#datepicker').val();

    $("#invisible5").hide();

    $("#invisible6").hide();

    $("#avertissementage2").hide();
    // alert(date);
    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {

                $("#invisible5").show();

                $("#date_nais_m").val('');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie1='+date+'&dateSaisie2='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0'){
                    if(value!=='')
                    {
                        // $("#datepicker").attr('value','');
                        $("#invisible6").show();

                        $("#date_nais_m").val('');
                    }
                }
                if(index=='1')
                {
                    if(value < 14) {
                        $("#avertissementage2").show();

                        document.getElementById("demoM").innerHTML =value+ ' an(s)';
                    }

                }
                // $("#datepicker").attr('value','')
            });
        }
    });
});

$('#date_nais_p').change(function (e)
{
    $("#invisible3").hide();

    $("#invisible4").hide();

    $("#avertissementage").hide();

    var date =$('#date_nais_p').val();

    var date1 =$('#datepicker').val();
    // alert(date);
    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
               // alert(value);
                $("#invisible3").show();
                //$("#datepicker").attr('value','');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie1='+date+'&dateSaisie2='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0'){
                    if(value!=='')
                    {
                        // $("#datepicker").attr('value','');
                        $("#invisible4").show();

                        $("#date_nais_p").val('');
                    }
                }
                if(index=='1')
                {
                   if(value < 18) {
                       $("#avertissementage").show();

                       document.getElementById("demo").innerHTML =value+ ' an(s)';
                   }

                }
                    // $("#datepicker").attr('value','')
            });
        }
    });
});


$('#date_trans').change(function (e)
{
    $("#invisible7").hide();

    $("#invisible8").hide();

    $("#avertissementage4").hide();

    var date =$('#date_trans').val();

    var date1 =$('#date_decl').val();

    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                // alert(value);
                $("#invisible7").show();
                $("#date_trans").val('');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie2='+date+'&dateSaisie1='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0')
                {
                    if(value!=='')
                    {
                        $("#invisible8").show();
                        $("#date_trans").val('');
                    }
                }
                if(index=='2')
                {
                    if(value<0)
                    {
                        $("#avertissementage4").show();
                       // alert(value);
                    }
                }
            });
        }
    });
});

$('#date_deces_decl').change(function (e)
{
    $("#invisible10").hide();

    $("#invisible11").hide();

    var date =$('#date_deces_decl').val();

    var date1 =$('#date_decl1').val();

    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
            success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                // alert(value);
                $("#invisible10").show();

                $("#date_deces_decl").val('');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie1='+date+'&dateSaisie2='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0')
                {
                    if(value!=='')
                    {
                        $("#invisible11").show();
                        $("#date_deces_decl").val('');
                    }
                }
                if(index=='2')
                {
                    if(value<0)
                    {
                        $("#avertissementage4").show();
                        //alert(value);
                    }
                }
            });
        }
    });
});

$('#date_nais_deces').change(function (e)
{
    $("#invisible12").hide();

    $("#invisible13").hide();

    var date =$('#date_nais_deces').val();

    var date1 =$('#date_decl1').val();

    $.ajax({
        url: 'Checker/date_format_day', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie='+ date, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
            success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                // alert(value);
                $("#invisible11").show();

                $("#date_nais_deces").val('');
            });
        }
    });

    $.ajax({
        url: 'Checker/deux_dates_compare', // Le nom du fichier indiqué dans le formulaire
        //type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)a
        data: 'dateSaisie1='+date+'&dateSaisie2='+date1, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
        dataType:
            'json',
        success: function(json) { // Je récupère la réponse du fichier PHP
            $.each(json, function(index, value) {
                if(index=='0')
                {
                    if(value!=='')
                    {
                        $("#invisible12").show();
                        $("#date_nais_deces").val('');
                    }
                }
                if(index=='2')
                {
                    if(value<0)
                    {
                        $("#avertissementage4").show();
                        //alert(value);
                    }
                }
            });
        }
    });
});




// Time Picker
jQuery('#timepicker').timepicker({
    defaultTIme: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker2').timepicker({
    showMeridian: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker3').timepicker({
    minuteStep: 15,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});

//colorpicker start

$('.colorpicker-default').colorpicker({
    format: 'hex'
});
$('.colorpicker-rgba').colorpicker();

// Date Picker
jQuery('#datepicker').datepicker(
    {
        format: "dd/mm/yyyy"
    }
);

jQuery('#datepicker1').datepicker(
    {
        format: "dd/mm/yyyy"
    }
);

jQuery('#date_decl1').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_dec').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_decl').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_nais_p').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_decl2').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_nais_m').datepicker({
    format: "dd/mm/yyyy"
});
jQuery('#date_trans').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#date_deces_decl').datepicker({
    format: "dd/mm/yyyy"
});
jQuery('#date_nais_deces').datepicker({
    format: "dd/mm/yyyy"
});

jQuery('#datedeclaration').datepicker();

jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#datepicker-inline').datepicker();

jQuery('#datepicker-multiple-date').datepicker({
    format: "mm/dd/yyyy",
    clearBtn: true,
    multidate: true,
    multidateSeparator: ","
});
jQuery('#date-range').datepicker({
    toggleActive: true
});

//Clock Picker
$('.clockpicker').clockpicker({
    donetext: 'Done'
});

$('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
$('#check-minutes').click(function (e) {
    // Have to stop propagation here
    e.stopPropagation();
    $("#single-input").clockpicker('show')
        .clockpicker('toggleView', 'minutes');
});


//Date range picker
$('.input-daterange-datepicker').daterangepicker({
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default'
});
$('.input-daterange-timepicker').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    },
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default'
});
$('.input-limit-datepicker').daterangepicker({
    format: 'MM/DD/YYYY',
    minDate: '06/01/2015',
    maxDate: '06/30/2015',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default',
    dateLimit: {
        days: 6
    }
});

$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

$('#reportrange').daterangepicker({
    format: 'MM/DD/YYYY',
    startDate: moment().subtract(29, 'days'),
    endDate: moment(),
    minDate: '01/01/2012',
    maxDate: '12/31/2015',
    dateLimit: {
        days: 60
    },
    showDropdowns: true,
    showWeekNumbers: true,
    timePicker: false,
    timePickerIncrement: 1,
    timePicker12Hour: true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    opens: 'left',
    drops: 'down',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default',
    separator: ' to ',
    locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Cancel',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
    }
}, function (start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
});
