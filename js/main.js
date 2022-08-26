$(document).ready(function(){
    // Accordion for setup
    $('.toggle').click(function(){
        
        // show/hide panel
        $(this).next('.panel').toggle();

        // remove/add active state
        this.classList.toggle("active");

    });
    
});