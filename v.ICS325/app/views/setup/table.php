<?php require APPROOT . '/views/inc/header.php' ?>
    
    <div class="table-container">
    
    	<table id="dataTable">
    	    <thead>
    	        <tr>
    	        <?php foreach($data['selected_columns'] as $column) : ?>
				    <th><?php echo $column; ?></th>
				<?php endforeach; ?>
    	        </tr>
    	    </thead>
    	    
    	    
    	    <tbody>
                <?php foreach($data['rows'] as $row) : ?>
    	    	<tr>
                    <?php foreach($data['selected_columns'] as $column) : ?>
                    <td><?php echo $row->$column; ?></td>
    	            <?php endforeach; ?>
    	    	</tr>
                <?php endforeach; ?>
    	    </tbody>
                          
            <tfoot>
    	        <tr>
    	        <?php foreach($data['selected_columns'] as $column) : ?>
				    <th class=""><?php echo $column; ?></th>
				<?php endforeach; ?>
    	        </tr>
    	    </tfoot>
   	            	    
    	</table>
    	
    	<?php // print_r($data['paging']); ?>
    	
    	<!-- CONFIGURATIONS -->
    	<button class="toggle table-toggle">Configurations</button>
    	
    	<section class="table-panel">
    		
    		<p>What configurations do you want for your DataTable?</p>
    		
    		<form action="" method="post" id="extensions-form">
    		
    		    <div class="flex-container">
                 
                    <!-- Header -->
                    <label class="checkbox-container">Header
                        <input type="checkbox" id="header" name="extensions[]" value="Header"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('Header', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>

                        <span class="checkmark"></span>
                    </label>
                  
                    <!-- FixedHeader -->
                    <label class="checkbox-container">FixedHeader
                        <input type="checkbox" id="fixedHeader" name="extensions[]" value="FixedHeader"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('FixedHeader', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                                  
                        <span class="checkmark"></span>
                    </label>
                     
                     
                    <!-- Col Search -->
                    <label class="checkbox-container">HeaderColumnSearch
                        <input type="checkbox" id="headerColSearch" class="colSearch" name="extensions[]" value="headerColSearch"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('headerColSearch', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                         <span class="checkmark"></span>
                    </label>
                      
                </div>
                
                <div class="flex-container footer-container">
                   
                    <!-- Footer -->
                    <label class="checkbox-container">Footer
                        <input type="checkbox" id="footer" class="footer" name="extensions[]" value="Footer"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('Footer', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                        <span class="checkmark"></span>
                    </label>
                                  
                    <!-- FixedFooter -->
                    <label class="checkbox-container">FixedFooter
                        <input type="checkbox" id="fixedFooter" class="footer footerVScroll" name="extensions[]" value="FixedFooter"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('FixedFooter', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                        <span class="checkmark"></span>
                    </label>
                    
                    <!-- Col Search -->
                    <label class="checkbox-container">FooterColSearch
                        <input type="checkbox" id="footerColSearch" class="colSearch" name="extensions[]" value="footerColSearch"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('footerColSearch', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                         <span class="checkmark"></span>
                    </label>

                </div>
                    
                <div class="flex-container">
                   
                    <!-- Horizontal Scrollbar -->
                    <label class="checkbox-container">Horizontal Scrollbar
                        <input type="checkbox" id="hScroll" name="extensions[]" value="hScroll"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('hScroll', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>

                        <span class="checkmark"></span>
                    </label>
                                  
                    <!-- FixedFooter -->
                    <label class="checkbox-container">Vertical Scrollbar
                        <input type="checkbox" id="vScroll" class="footerVScroll" name="extensions[]" value="vScroll"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['extensions'])){
                               if(in_array('vScroll', $data['extensions'])){
                                   echo 'checked';
                                   // if not previously checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>

                        <span class="checkmark"></span>
                    </label>
                    
                    
                
                </div>
              
                <!-- Buttons -->
                <div class="flex-container">
                    <label class="checkbox-container">Buttons
                        <input type="checkbox" id="buttons" name="extensions[]" value="Buttons"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('Buttons', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>

                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container copy">Copy
                        <input type="checkbox" id="copy" name="extensions[]" value="[copy]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[copy]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container excel">Excel
                        <input type="checkbox" id="excel" name="extensions[]" value="[excel]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[excel]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>

                    <label class="checkbox-container excel">PPT
                        <input type="checkbox" id="ppt" name="extensions[]" value="[ppt]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[ppt]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>


                    
                    <label class="checkbox-container csv">CSV
                        <input type="checkbox" id="csv" name="extensions[]" value="[csv]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[csv]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container pdf">PDF
                        <input type="checkbox" id="pdf" name="extensions[]" value="[pdf]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[pdf]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container print">Print
                        <input type="checkbox" id="print" name="extensions[]" value="[print]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[print]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                </div>
                                             
                <!-- Paging -->
                <div class="flex-container">
                    <label class="checkbox-container">Paging
                        <input type="checkbox" id="paging" name="extensions[]" value="Paging"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('Paging', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>

                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container five">5
                        <input type="checkbox" id="five" name="extensions[]" value="[5]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[5]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container ten">10
                        <input type="checkbox" id="ten" name="extensions[]" value="[10]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[10]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container twenty-five">25
                        <input type="checkbox" id="twentyFive" name="extensions[]" value="[25]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[25]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container fifty">50
                        <input type="checkbox" id="fifty" name="extensions[]" value="[50]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[50]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container one-hundred">100
                        <input type="checkbox" id="oneHundred" name="extensions[]" value="[100]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[100]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                    
                    <label class="checkbox-container all">All
                        <input type="checkbox" id="all" name="extensions[]" value="[all]"<?php
   
                               if(isset($data['extensions'])){
                                   // Check checkbox if previously checked
                                   if(in_array('[all]', $data['extensions'])){
                                       echo 'checked';
                                   // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   }
                               } else {
                                   // Default
                                   echo 'checked';
                               }
                               
                               ?>>
                        <span class="checkmark"></span>
                    </label>
                </div>
               
                <!-- ColReorder -->
                <label class="checkbox-container">ColReorder
					<input type="checkbox" id="colReorder" name="extensions[]" value="ColReorder"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['extensions'])){
                               if(in_array('ColReorder', $data['extensions'])){
                                   echo 'checked';
                                   // if not previously checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>
                           
			  		<span class="checkmark"></span>
				</label>
                
                <!-- RowReorder -->
                <label class="checkbox-container">RowReorder
					<input type="checkbox" id="rowReorder" name="extensions[]" value="RowReorder"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['extensions'])){
                               if(in_array('RowReorder', $data['extensions'])){
                                   echo 'checked';
                                   // if not previously checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>
                           
			  		<span class="checkmark"></span>
				</label>
                
                <div class="flex-container">
                    <!-- Select - Excel-like -->
                    <label class="checkbox-container">Select
                        <input type="checkbox" id="select" name="extensions[]" value="Select"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('Select', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                        <span class="checkmark"></span>
                    </label>

                    <!-- KeyTable -->
                    <label class="checkbox-container">KeyTable
                        <input type="checkbox" id="keyTable" name="extensions[]" value="KeyTable"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('KeyTable', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                        <span class="checkmark"></span>
                    </label>



                    <!-- autoFill -->
                    <label class="checkbox-container">autoFill
                        <input type="checkbox" id="autoFill" name="extensions[]" value="autoFill"<?php

                               // Check checkbox if previously checked
                               if(isset($data['extensions'])){
                                   if(in_array('autoFill', $data['extensions'])){
                                       echo 'checked';
                                       // if not previously checked, do nothing
                                   } else {
                                       echo '';
                                   } 
                               }?>>

                        <span class="checkmark"></span>
                    </label>
                </div>
                 
                 
                 
                <!-- Responsive -->
   				<label class="checkbox-container">Responsive
					<input type="checkbox" id="responsive" name="extensions[]" value="Responsive"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['extensions'])){
                               if(in_array('Responsive', $data['extensions'])){
                                   echo 'checked';
                                   // if not previously checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>
			  		<span class="checkmark"></span>
				</label>
                               
                <!-- stateSave -->
   				<label class="checkbox-container">Save Configurations
					<input type="checkbox" id="stateSave" name="extensions[]" value="SaveConfigurations"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['extensions'])){
                               if(in_array('Responsive', $data['extensions'])){
                                   echo 'checked';
                                   // if not previously checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>
			  		<span class="checkmark"></span>
				</label>
                                
   				<br>
   				
				<div>
					<button type="submit" name="configure_table">Configure</button>
				</div>
				
    		</form>
			
    	</section>
    	
    </div>
<?php require APPROOT . '/views/inc/footer.php' ?>