$(document).ready(function() {

    $vehicules = $('.model_card');

    $type_input = $('#type');
    $budget_input = $('#budget');
    $power_input = $('#puissance');
    $color_input = $('input[name=\'couleur\']');

    // Selection du type
    $type_input.change(function(){
        $vehicules.each(function(key, value){
            $(value).show();
        })
        $selected_type = $(this).find(":selected").val();
        $vehicules.each(function(key, value){
            if($(value).data('type') !== $selected_type){
                $(value).hide();
            }
        })
    })

    // Selection du prix
    $budget_input.change(function(){
        $vehicules.each(function(key, value){
            $(value).show();
        })
        $selected_price = $(this).val();
        $vehicules.each(function(key, value){
            if($(value).data('prix') >= $selected_price){
                $(value).hide();
            }
        })
    })
    
    // Selection de la puissance
    $power_input.change(function(){
        $vehicules.each(function(key, value){
            $(value).show();
        })
        $selected_power = $(this).find(":selected").val();
        $vehicules.each(function(key, value){
            if($(value).data('power') !== $selected_power){
                $(value).hide();
            }
        })
    })

    // Selection de la couleur
    $color_input.change(function(){
        $vehicules.each(function(key, value){
            $(value).show();
        })
        $checked_color = $(this).data('color');
        $vehicules.each(function(key, value){
            if($(value).data('color') !== $checked_color){
                $(value).hide();
            }
        })
    })



});
