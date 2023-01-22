$(document).ready(function() {

    $vehicules = $('.model_card');

    $type_input = $('#type');
    $budget_input = $('#budget');
    $power_input = $('#puissance');
    $color_input = $('input[name=\'couleur\']');
    $result_card_container = $('.result_card_container');
    $erreur = $('#erreur');

    // Selection du type
    $type_input.change(function(){
        $vehicules.each(function(key, value){
            $(value).hide();
        })
        $selected_type = $(this).find(":selected").val();
        if($selected_type == ""){
            $vehicules.each(function(key, value){
                $(value).show();
            })
        }else{
            $vehicules.each(function(key, value){
                if($(value).data('type') == $selected_type){
                    $(value).show();
                }
            })
        }
    })

    // Selection du prix
    $budget_input.change(function(){
        $erreur.hide();
        $vehicules.each(function(key, value){
            $(value).hide();
        })
        $selected_price = $(this).val();
        $i = 0
        $vehicules.each(function(key, value){
            if($(value).data('prix') <= $selected_price){
                $i++;
                $(value).show();
            }
        })
        if($i == 0){
            $erreur.show();
            
        }
    })
    
    // Selection de la puissance
    $power_input.change(function(){
        $erreur.hide();
        $vehicules.each(function(key, value){
            $(value).hide();
        })
        $selected_power = $(this).find(":selected").val();
        if($selected_power == ""){
            $vehicules.each(function(key, value){
                $(value).show();
            })
        }else{
            $vehicules.each(function(key, value){
                if($(value).data('power') == $selected_power){
                    $(value).show();
                }
            })
        }
    })

    // Selection de la couleur
    $color_input.change(function(){
        $erreur.hide();
        $vehicules.each(function(key, value){
            $(value).hide();
        })
        $checked_color = $(this).data('color');
        $i = 0
        $vehicules.each(function(key, value){
            if($(value).data('color') == $checked_color){
                $i++;
                $(value).show();
            }
        })
        if($i == 0){
            $erreur.show();
            
        }
    })
});
