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

//fonction permettant de gérer la taille du footer et header selon les résolutions.
function resolution(){
   var largeur=screen.width;       
    if(largeur==1280){
        $('footer').css({'height': '300px'});
        $('header').css({'height': '340px'});
        $('.ecriture').css({'font-size':'48px'});
        $('.menu_footer').css({'font-size':'36px'});
    }else if(largeur==1366){
        $('header').css({'height': '300px'});
        $('.ecriture').css({'font-size':'50px'});
        $('footer').css({'height': '280px'});
        $('.menu_footer').css({'font-size':'36px'});
    }else if(largeur==1024){
        $('header').css({'height': '280px'});
        $('.ecriture').css({'font-size':'39px'});
        $('footer').css({'height': '240px'});
        $('.menu_footer').css({'font-size':'36px'});
        $('.menu_footer ul').css({'margin-left':'-7%'});
    }
};