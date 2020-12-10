$(document).ready(function(){

    // Accordion for setup
    $('.index-toggle').click(function(){
        $(this).next('.panel').toggle();
        this.classList.toggle("active");
    });
    
    // Accordion for table
	$('.table-toggle').click(function(){
        $('.table-panel').toggle();
        this.classList.toggle("inactive");
    });
    
    
    // Select All Checkboxes btn for Columns
    $('#check_all').click(function(){
        if(!$('.queried_columns').prop('checked')){
            $('.queried_columns').prop('checked', true);
            $(this).val('unCheck All');
        } else {
            $('.queried_columns').prop('checked', false);
            $(this).val('Check All');
        } 
    });
    
    // Add Buttons configuration options when Buttons is checked
    
    // Determine initial state of buttons
    if($('#buttons').prop('checked')){
        $('.copy').show();
        $('.excel').show();
        $('.csv').show();
        $('.pdf').show();
        $('.print').show();
        $('.ppt').show();
    } else {
        $('.copy').hide();
        $('.excel').hide();
        $('.csv').hide();
        $('.pdf').hide();
        $('.print').hide();
        $('.ppt').show();
    }
    
    // Show btn options if buttons is checked
    $('#buttons').on('click', function(){
        if($(this).prop('checked')){
            $('.copy').show();
            $('#copy').prop('checked', true);
            $('.excel').show();
            $('#excel').prop('checked', true);
            $('.csv').show();
            $('#csv').prop('checked', true);
            $('.pdf').show();
            $('#pdf').prop('checked', true);
            $('.print').show();
            $('#print').prop('checked', true);
        // Hide and remove additional checks if not checked
        } else {
            $('.copy').hide();            
            $('.excel').hide();
            $('.csv').hide();
            $('.pdf').hide();
            $('.print').hide();
        }
    });
    
    // Determine initial state of paging
    if($('#paging').prop('checked')){
        $('.five').show();
        $('.ten').show();
        $('.twenty-five').show();
        $('.fifty').show();
        $('.one-hundred').show();
        $('.all').show();
    } else {
        $('.five').hide();
        $('.ten').hide();
        $('.twenty-five').hide();
        $('.fifty').hide();
        $('.one-hundred').hide();
        $('.all').hide();
    }
    
    // Show paging options if buttons is checked
    $('#paging').on('click', function(){
        if($(this).prop('checked')){
            $('.five').show();
            $('#five').prop('checked', true);
            $('.ten').show();
            $('#ten').prop('checked', true);
            $('.twenty-five').show();
            $('#twentyFive').prop('checked', true);
            $('.fifty').show();
            $('#fifty').prop('checked', true);
            $('.one-hundred').show();
            $('#oneHundred').prop('checked', true);
            $('.all').show();
            $('#all').prop('checked', true);
        // Hide and remove additional checks if not checked
        } else {
            $('.five').hide();
            $('.ten').hide();
            $('.twenty-five').hide();
            $('.fifty').hide();
            $('.one-hundred').hide();
            $('.all').hide();
        }
    });
    
    
    // Add Paging options when Paging is checked
    if($('#paging').prop('checked')){
       $('#pagingOptions').show();
    } else {
       $('#pagingOptions').hide();
    }
    
    $('#paging').on('click', function(){
        if($(this).prop('checked')){
            $('#pagingOptions').show();
        } else {
            $('#pagingOptions').hide();
        }
    });
    
    
    
    // Header
    if($('#header').prop('checked')){
       $('thead').show();
    } else {
       $('thead').hide();
    }
    
    
    // Footer
    if($('#footer').prop('checked')){
       $('tfoot').show();
    } else {
       $('tfoot').hide();
    }
    
    // Default dataTable settings
    var input = {
        dom: 'lfrtip',
        "scrollX": true,
//        orderCellsTop: true,
        columnDefs: [
                { type: 'natural', targets: '_all' }
            
     ]
    };
    
    //**** SET EXTENSIONS ****//
    
    // fixedHeader and fixedFooter checked
    if($('#fixedHeader').prop('checked') && $('#fixedFooter').prop('checked')){
        input = {
            fixedHeader: {
                header: true,
                footer: true
            }
        }
        
    // only fixedFooter checked
    } else if($('#fixedHeader').prop('checked') == false && $('#fixedFooter').prop('checked')){
        input = {
            fixedHeader: {
                header: false,
                footer: true,
            }
        }     
    } else if($('#fixedHeader').prop('checked')){
        input.fixedHeader = true;   
    }
    
    // Needed to prevent ordering from being in the way of headerfilter
    if($('#header').prop('checked') || $('#footer').prop('checked')){
        input.orderCellsTop = true;
    }
    
    
    // Paging
    if($('#paging').prop('checked')){
        
        var paging = [[],[]];
        
        if($('#five').prop('checked')){
            paging[0].push(5);
            paging[1].push(5);
        }
        
        if($('#ten').prop('checked')){
            paging[0].push(10);
            paging[1].push(10);
        }
        
        if($('#twentyFive').prop('checked')){
            paging[0].push(25);
            paging[1].push(25);
        }
        
        if($('#fifty').prop('checked')){
            paging[0].push(50);
            paging[1].push(50);
        }
        
        if($('#oneHundred').prop('checked')){
            paging[0].push(100);
            paging[1].push(100);
        }
        
        if($('#all').prop('checked')){
            paging[0].push(-1);
            paging[1].push('ALL');
        }
        
        input.lengthMenu = paging;
        
    }
    
    // Btns
    if($('#buttons').prop('checked')){
        
        input.dom = 'Blfrtip';
        
        var btns = [];
        
        if($('#copy').prop('checked')){
            btns.push(['copy']);
        }
        
        if($('#excel').prop('checked')){
            btns.push(['excel']);
        }
        
        if($('#csv').prop('checked')){
            btns.push(['csv']);
        }
        
        if($('#pdf').prop('checked')){
            btns.push(['pdf']);
        }
        
        if($('#print').prop('checked')){
            btns.push(['print']);
        }
        
        if(Array.isArray(btns) || btns.length){
            input.buttons = btns;
        } 
    }
    
    
    // FixedHeader requires Header
    $('#fixedHeader').click(function(){
        $('#header').prop('checked', true);
    });
    
    
    
    // Responsive requires Header
    $('#responsive').click(function(){
        $('#header').prop('checked', true);
    });
    
    // HorizontalScrollbar requires Header
    $('#hScroll').click(function(){
        $('#header').prop('checked', true);
    });
        
    
    // Remove header extensions checkboxes if header is unchecked
    $('#header').click(function(){
        if($(this).prop('checked') == false){
            $('#fixedHeader').prop('checked', false);
            $('#headerColSearch').prop('checked', false);
            $('#hScroll').prop('checked', false);
            $('#responsive').prop('checked', false);
        }
    });
    
    // headerColSearch requires Footer
    $('#headerColSearch').click(function(){
        $('#header').prop('checked', true);
    });
    
    // footerColSearch
    $('.colSearch').change(function(){
       $('.colSearch').not(this).prop('checked', false); 
    });
    
    // FixedFooter requires Footer
    $('#fixedFooter').click(function(){
        $('#footer').prop('checked', true);
    });
    
    // footerColSearch requires Footer
    $('#footerColSearch').click(function(){
        $('#footer').prop('checked', true);
    });

    // Remove footer extensions if footer is unchecked
    $('#footer').click(function(){
        if($(this).prop('checked') == false){
            $('#fixedFooter').prop('checked', false);
            $('#footerColSearch').prop('checked', false);
        }
    });
    
    // KeyTable requires AutoFill
    $('#autoFill').click(function(){
        $('#keyTable').prop('checked', true);
    });
    
    // Remove autoFill check if KeyTable is unchecked
    $('#keyTable').click(function(){
        if($('#autoFill').prop('checked')){
            $('#autoFill').prop('checked', false);
        }
    });
    
    
    // fixedFooter OR vScroll - fixedFooter can't be checked if vScroll is checked
    $('.footerVScroll').change(function(){
        $('.footerVScroll').not(this).prop('checked', false);
    });
    
    
    // Horizontal Scrollbar
    if($('#hScroll').prop('checked') == false){
        input.scrollX = false;
    }
    
    // Vertical Scrollbar - viewable w/ at least 10 rows per page
    if($('#vScroll').prop('checked')){
        input.scrollY = 205;
    }
    
    // Paging
    if($('#paging').prop('checked') == false){
        input.paging = false;
    }
    
    // ColReorder
    if($('#colReorder').prop('checked')){
        input.colReorder = true;
    }
    
    // rowReorder
    if($('#rowReorder').prop('checked')){
        input.rowReorder = true;
        $('#dataTable tr td:first-child').css( 'cursor', 'move' );
    }
    
    // Select
    if($('#select').prop('checked')){
        input.select = true;
    }
    
    // keyTable
    if($('#keyTable').prop('checked')){
        input.keys = true;
    }
    
    if($('#autoFill').prop('checked')){
        input.autoFill = true;
    }
    
    // Responsive
    if($('#responsive').prop('checked')){
        input.responsive = true;
    }
    
    if($('#headerColSearch').prop('checked')){
        
        // Setup - add a text input to each header cell
        $('#dataTable thead tr').clone(true).appendTo('#dataTable thead');
        
        var cloned = $('#dataTable thead tr:eq(1) th');
        
        cloned.css('background','#fff');
        
        cloned.each(function(i){
            
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Filter '+title+'">');

            $('input', this).on('keyup change', function(){
                if(table.column(i).search() !== this.value) {
                    table.column(i).search(this.value).draw();
                }
            });
        });
 
        var table = $('#dataTable').DataTable(input);
       
    } else if($('#footerColSearch').prop('checked')){
  
        $('#dataTable tfoot tr').clone(true).appendTo('#dataTable tfoot');
        var cloned = $('#dataTable tfoot tr:eq(1) th');
        
        cloned.css('background','#f4f4f4');
        
        cloned.each(function(i){
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Filter '+title+'">');

            $('input', this).on('keyup change', function(){
                if(table.column(i).search() !== this.value) {
                    table.column(i).search(this.value).draw();
                }
            });
        });
 
        var table = $('#dataTable').DataTable(input);
    } else {
        $('#dataTable').DataTable(input);
    }
});