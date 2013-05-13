//fonction permettant de gérer le menu.
function gestionMenu(DivSousCategorie, element){
    if($('#'+DivSousCategorie).css('display')=='none'){
        //on cache toutes les div qui sont affichés. 
        $('.sous_categorie').hide();
        //On supprime les styles de selection de la catégorie
        $('li').removeClass("hover_categorie");
        //On fait apparaitre celui cliqué.
        $('#'+DivSousCategorie).show();
        //On differencie celui qui a été choisi.
        $(element).toggleClass("hover_categorie");
    }else{
        //on cache toutes les div qui sont affichés.
        $('.sous_categorie').hide();
        //On supprime les styles de selection de la catégorie
        $('li').removeClass("hover_categorie");
    }
};

//fonction permettant de cacher les div du menu lors du clique à l'extérieur du menu.
function disparitionMenu(){
    $('.sous_categorie').hide();
    $('li').removeClass("hover_categorie");
};

//fonction permettant de gérer le nombre de caractère d'une texteaera.
function gestionNombreCaracteres(element,nombreCaractereMax){
    if(element.value.length >= nombreCaractereMax){
        element.value=element.value.substring(0,nombreCaractereMax);
    }
};