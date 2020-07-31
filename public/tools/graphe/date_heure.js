// JavaScript : Date et Heure en temps réelle
function HeureCheckEJS()
    {
    krucial = new Date;
    heure = krucial.getHours();
    min = krucial.getMinutes();
    sec = krucial.getSeconds();
    jour = krucial.getDate();
    mois = krucial.getMonth()+1;
    annee = krucial.getFullYear();
    if (sec < 10)
        sec0 = "0";
    else
        sec0 = "";
    if (min < 10)
        min0 = "0";
    else
        min0 = "";
    if (heure < 10)
        heure0 = "0";
    else
        heure0 = "";
    if (mois == 1)
        mois = "Janvier";
    if (mois == 2)
        mois = "Février";
    if (mois ==3)
        mois = "Mars";
    if (mois == 4)
        mois = "Avril";
    if (mois == 5)
        mois = "Mai";
    if (mois == 6)
        mois = "Juin";
    if (mois == 7)
        mois = "Juillet";
    if (mois == 8)
        mois = "Août";
    if (mois == 9)
        mois = "Septembre";
    if (mois == 10)
        mois = "Octobre";
    if (mois == 11)
        mois = "Novembre";
    if (mois == 12)
        mois = "Décembre";
    if (jour == 1)
        jour1 = "er";
    else
        jour1 = "";
    DinaHeure = "Il est <b class=\"txtSizeMedium\">" + heure0 + heure + "h" + min0 + min  + "</b> et nous sommes le <b>" + jour + jour1 + " " + mois + " " + annee + "</b>.";
    which = DinaHeure
    if (document.getElementById){
        document.getElementById("ejs_heure").innerHTML=which;
    }
    setTimeout("HeureCheckEJS()", 1000)
    }
window.onload = HeureCheckEJS;