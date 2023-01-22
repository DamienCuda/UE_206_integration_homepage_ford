$(document).ready(function() {

    $vehicules = $('.model_card');

    $type_input = $('#type');
    $budget_input = $('#budget');
    $power_input = $('#puissance');
    $color_input = $('input[name=\'couleur\']');
    $result_card_container = $('.result_card_container');
    $erreur = $('#erreur');
    $reset_btn = $('#reset_btn');

    // Selection du type
    $type_input.change(function(){
        $erreur.hide(); //On cache le message d'erreur en cas de clique multiple
        $vehicules.each(function(key, value){
            $(value).hide(); //On cache toutes les voitures
        })
        $selected_type = $(this).find(":selected").val();
        if($selected_type == ""){
            $vehicules.each(function(key, value){
                $(value).show(); //On gère l'erreur
            })
        }else{
            $vehicules.each(function(key, value){
                if($(value).data('type') == $selected_type){
                    $(value).show(); //On ne montre que celle qui corresponde à la selection
                }
            })
        }
    })

    // Selection du prix
    $budget_input.change(function(){
        $erreur.hide(); //On cache le message d'erreur en cas de clique multiple
        $vehicules.each(function(key, value){
            $(value).hide(); //On cache toutes les voitures
        })
        $selected_price = $(this).val();
        $i = 0
        $vehicules.each(function(key, value){
            if($(value).data('prix') <= $selected_price){
                $i++; //On incrémente si une voiture correspond
                $(value).show(); //On ne montre que celle qui corresponde à la selection
            }
        })
        if($i == 0){
            $erreur.show(); //On gère l'erreur
        }
    })
    
    // Selection de la puissance
    $power_input.change(function(){
        $erreur.hide(); //On cache le message d'erreur en cas de clique multiple
        $vehicules.each(function(key, value){
            $(value).hide(); //On cache toutes les voitures
        })
        $selected_power = $(this).find(":selected").val();
        if($selected_power == ""){ //On gère l'erreur
            $vehicules.each(function(key, value){
                $(value).show(); //On ne montre que celle qui corresponde à la selection
            })
        }else{
            $vehicules.each(function(key, value){
                if($(value).data('power') == $selected_power){
                    $(value).show(); //On ne montre que celle qui corresponde à la selection
                }
            })
        }
    })

    // Selection de la couleur
    $color_input.change(function(){
        $erreur.hide(); //On cache le message d'erreur en cas de clique multiple
        $vehicules.each(function(key, value){
            $(value).hide(); //On cache toutes les voitures
        })
        $checked_color = $(this).data('color');
        $i = 0
        $vehicules.each(function(key, value){
            if($(value).data('color') == $checked_color){
                $i++; //On incrémente si une voiture correspond
                $(value).show();
            }
        })
        if($i == 0){ 
            $erreur.show();  //On gère l'erreur
        }
    })

    $reset_btn.click(function(){
        $erreur.hide();
        $vehicules.each(function(key, value){
            $(value).show(); //On gère l'erreur
        })
    })

});
