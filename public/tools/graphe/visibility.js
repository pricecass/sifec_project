// JavaScript Document
function visibilite(thingId) {
    var targetElement;
    targetElement = document.getElementById(thingId);
    if (targetElement.style.display == "none") {
        targetElement.style.display = "";
    } else {
        targetElement.style.display = "none";
    }
}
function visibilite_show(thingId) {
    var targetElement;
    targetElement = document.getElementById(thingId);
    if (targetElement.style.display == "none") {
        targetElement.style.display = "";
    } 
}
function visibilite_nee(thingId1, thingId2, thingId3) {

    var targetElement;
    targetElement1 = document.getElementById(thingId1);
    targetElement2 = document.getElementById(thingId2);
    targetElement3 = document.getElementById(thingId3);

    if (targetElement2.value == "Madame") {
        targetElement1.style.display = "";
    } else {
        targetElement1.style.display = "none";
        targetElement3.value = "";
    }

}
function visibilite_zone(thingId1, thingId2, thingId3) {

    var targetElement;
    targetElement1 = document.getElementById(thingId1);
    targetElement2 = document.getElementById(thingId2);
    targetElement3 = document.getElementById(thingId3);

    if (targetElement1.value == "controle") {
        targetElement2.style.display = "";
        targetElement3.style.display = "none";
    } else {
        targetElement2.style.display = "none";
        targetElement3.style.display = "";
    }

}
function visibilite_acompte(thingId1, thingId2, thingId3, thingId4) {

    var targetElement;
    targetElement1 = document.getElementById(thingId1);
    targetElement2 = document.getElementById(thingId2);
    targetElement3 = document.getElementById(thingId3);
    targetElement4 = document.getElementById(thingId4);

    if (targetElement1.value == "ACOMPTE") {
        targetElement2.style.display = "";
        targetElement3.value = "";
    } else {
        targetElement2.style.display = "none";
        targetElement3.value = targetElement4.value;
    }

}
function set_mention_note(thingId1, thingId2, thingId3) {

    var targetElement;
    targetElement1 = document.getElementById(thingId1);
    targetElement2 = document.getElementById(thingId2);
    targetElement3 = document.getElementById(thingId3);

    if (targetElement1.value > 0) {
        targetElement3.checked = true;
        targetElement1.style.backgroundColor = "#E7FFCE";
        targetElement2.style.backgroundColor = "#B9FF73";
    } else {
        targetElement3.checked = false;
        targetElement1.style.backgroundColor = "";
        targetElement2.style.backgroundColor = "";
    }

    if (targetElement1.value <= 5) {
        targetElement2.value = "Très faible";
    } else {
        if (targetElement1.value >= 6 && targetElement1.value <= 7) {
            targetElement2.value = "Faible";
        } else {
            if (targetElement1.value >= 8 && targetElement1.value <= 9) {
                targetElement2.value = "Insuffisant";
            } else {
                if (targetElement1.value >= 10 && targetElement1.value <= 10) {
                    targetElement2.value = "Moyen";
                } else {
                    if (targetElement1.value > 10 && targetElement1.value <= 11) {
                        targetElement2.value = "Passable";
                    } else {
                        if (targetElement1.value > 11 && targetElement1.value <= 14) {
                            targetElement2.value = "Assez bien";
                        } else {
                            if (targetElement1.value > 14 && targetElement1.value <= 16) {
                                targetElement2.value = "Bien";
                            } else {
                                if (targetElement1.value > 16 && targetElement1.value <= 18) {
                                    targetElement2.value = "Très bien";
                                } else {
                                    if (targetElement1.value > 18) {
                                        targetElement2.value = "Excellent";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

    }

    if (targetElement1.value == "") {
        targetElement2.value = "";
    }

}
function visibilite_nee2(thingId) {

    var targetElement;
    targetElement = document.getElementById(thingId);

    if (document.add_inter_form.inter_civilite.value == "Madame") {
        targetElement.style.display = "";
    } else {
        targetElement.style.display = "none";
    }

}
function selectIngredient(select) {
    var option = select.options[select.selectedIndex];
    var ul = select.parentNode.getElementsByTagName('ul')[0];

    var choices = ul.getElementsByTagName('input');
    for (var i = 0; i < choices.length; i++)
        if (choices[i].value == option.value)
            return;

    var li = document.createElement('li');

    var input = document.createElement('input');
    var text = document.createTextNode(option.firstChild.data);

    input.type = 'hidden';
    input.name = 'ingredients[]';
    input.value = option.value;

    li.appendChild(input);
    li.appendChild(text);
    li.setAttribute('onclick', 'this.parentNode.removeChild(this);');
    li.setAttribute('id', 'puce');

    ul.appendChild(li);

    nbreLiElements();
}
function countLiElements(listeLi, targetId) {
    var targetInput = document.getElementById(targetId);
    var ulId = document.getElementById(listeLi);

    var totalLi = ulId.children.length;
    targetInput.value = totalLi;
}
function nbreLiElements() {
    var count = $("#listSco").children().length;
    var fraissco = $("#fraisscolarite").val(); //$("input").val();
    //alert( "Size: " + $("li").length );
    //alert( "Size: " + fraissco );
    var totalfrais = fraissco * count;
    $('#targetId').val(count);
    $('#montantapayer').val(totalfrais);
    $('#reglemmontant').val(totalfrais);

    //$('#reglemtype').children('ACOMPTE').attr('disabled', true)

}
function visibiliteZone(thingId, imgId) {
    var targetElement;
    var targetImg;
    targetElement = document.getElementById(thingId);
    targetImg = document.getElementById(imgId);
    if (targetElement.style.display == "none") {
        targetElement.style.display = "";
        targetImg.style.background = "url(../interface/images/icones/img-link-tree1.png)";
    } else {
        targetElement.style.display = "none";
        targetImg.style.background = "url(../interface/images/icones/img-link-tree2.png)";
    }
}
function visibiliteTab(aTab, dTab1, dTab2, dTab3, dTab4) {
    var targetElement;
    targetElement = document.getElementById(aTab);
    targetElement.style.display = "";

    var targetElement1;
    targetElement1 = document.getElementById(dTab1);
    targetElement1.style.display = "none";

    var targetElement2;
    targetElement2 = document.getElementById(dTab2);
    targetElement2.style.display = "none";

    var targetElement3;
    targetElement3 = document.getElementById(dTab3);
    targetElement3.style.display = "none";

    var targetElement4;
    targetElement4 = document.getElementById(dTab4);
    targetElement4.style.display = "none";

}
function setColorSelected() {
    var color = document.getElementById("color").value;
    document.getElementById("color").style.backgroundColor = color;
}
function setColorValue(theField) {
    var colorValue = document.getElementById(theField).value;
    if (colorValue == "AX") {
        document.getElementById(theField).style.backgroundColor = "#00D936";
    } else if (colorValue == "PY") {
        document.getElementById(theField).style.backgroundColor = "#FFBF00";
    } else {
        document.getElementById(theField).style.backgroundColor = "red";
    }
}