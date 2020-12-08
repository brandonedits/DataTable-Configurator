$(document).ready(function(){

    // Accordion
    $('.index-toggle').click(function(){
        $(this).next('.panel').toggle();
        this.classList.toggle("active");
    });

    // Select All Checkboxes btn for Columns
    $('#checkAll').click(function(){
        if(!$('.queried_columns').prop('checked')){
            $('.queried_columns').prop('checked', true);
            $(this).val('unCheck All');
        } else {
            $('.queried_columns').prop('checked', false);
            $(this).val('Check All');
        } 
    });
    
});