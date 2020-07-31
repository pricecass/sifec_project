var carte=document.querySelector('#carte');

var paths =carte.querySelectorAll('.carte__image a');

var links=carte.querySelectorAll('.carte__list a');

//Polyfill du foreach

if(NodeList.prototype.forEach===undefined)
{
          NodeList.prototype.forEach==function(){
              [].forEach.call(this, callback)
          }
}

var activeArea=function(id)
{
    carte.querySelectorAll('.actived').forEach(function (item){

        item.classList.remove('actived');
    });
    console.log(id);
    //alert(id);
   // document.querySelector('#liste_' + id).classList.add('actived');

    document.querySelector('#CG-'+ id).classList.add('actived');
}

paths.forEach(function (path){
    path.addEventListener('mouseenter', function(e){

        var id=this.id.replace('CG-','');

        activeArea(id);

        $("#maurel").hide();
    });
});

links.forEach(function (link){

    link.addEventListener('mouseenter', function(){
        var id=this.id.replace('liste_', '');
        activeArea(id);
    });

});