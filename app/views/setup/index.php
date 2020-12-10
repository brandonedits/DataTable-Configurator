<?php require APPROOT . '/views/inc/header.php' ?>
    
    <div class="container">
        
    	<!-- SERVER and DATABASE -->
		<button class="toggle index-toggle">Server and Database
   	
   			<?php 
                // Display db name if connected
                echo $data['db_name'] != '' ? '<h6>' . $data['db_name'] . '</h6>' : '';
            ?>
	
   		</button>
    	<section id="db" class="panel">
    		<p>What database do you want to connect to?</p>
			<form action="" method="post">
    			<div class="grid-container">
    				<label for="db_host">DB Host:</label>
    				<input type="text" name="db_host" id="db_host" value="<?php echo (!empty($data['db_host'])) ? $data['db_host'] : ''; ?>">
    				<p class="err"><?php echo isset($data['db_host_err']) ? $data['db_host_err'] : ''; ?></p>
    				
    				<label for="db_name">DB Name:</label>
    				<input type="text" name="db_name" id="db_name" value="<?php echo (!empty($data['db_name'])) ? $data['db_name'] : ''; ?>">
    				<p class="err"><?php echo isset($data['db_name_err']) ? $data['db_name_err'] : ''; ?></p>
    				
    				<label for="db_user">DB Username:</label>
    				<input type="text" name="db_user" id="db_user" value="<?php echo (!empty($data['db_user'])) ? $data['db_user'] : ''; ?>">
    				<p class="err"><?php echo isset($data['db_user_err']) ? $data['db_user_err'] : ''; ?></p>
    				
    				<label for="db_pass">DB Password:</label>
    				<input type="pass" name="db_pass" id="db_pass" value="<?php echo (!empty($data['db_pass'])) ? $data['db_pass'] : ''; ?>">
    				<p class="err"><?php echo isset($data['db_pass_err']) ? $data['db_pass_err'] : ''; ?></p>
    				
    				<div></div>
    				<div>
						<button type="submit" name="connect_db" id="connectDatabase">Connect</button>
						<button type="reset">Reset</button>
					</div>
    			</div>
    		</form>
    	</section>
    	
    	<!-- TABLE -->
    	<button class="toggle index-toggle">Table
    	
    		<?php
                // Display table name if connected
                echo isset($data['db_table']) && $data['db_table'] != '' ? '<h6>' . $data['db_table'] . '</h6>' : '';
            ?>
    		
    	</button>
    	<section id="dbTable" class="panel">
    		<p>What table do you want to connect to?</p>
			<form action="" method="post">
              
              <?php if(isset($data['db_table'])): ?>
              
                <select name="db_table" id="" onchange="this.form.submit()">
                
   				<?php foreach($data['tables'] as $table) : ?>
                   
                   <option value="<?php echo $table->TABLE_NAME; ?>" <?php echo $table->TABLE_NAME == $data['db_table'] ? 'selected' : ''; ?>><?php echo $table->TABLE_NAME; ?></option> 
                    
    			<?php endforeach; ?>
    			</select>
             
             <?php else: ?>
              
    			<select name="db_table" id="" onchange="this.form.submit()">
    			    <option value="">Select Table</option>
   				<?php foreach($data['tables'] as $table) : ?>
                    <option value="<?php echo $table->TABLE_NAME; ?>"><?php echo $table->TABLE_NAME; ?></option> 
    			<?php endforeach; ?>
    			</select>
          
          <?php endif; ?>
           
           
            </form>
    	</section>
    	
		<!-- COLUMNS -->
    	<button class="toggle index-toggle">Columns
    	
    	    <?php
            
            // Display selected columns if selected
            if(isset($data['selected_columns']) && $data['selected_columns'] != ''){
                                
                $result = [];
                
                // Loop through selected columns
                foreach($data['selected_columns'] as $cols){
                    // Add cols to array
                    $result[] = $cols;
                }
                
                // Echo column names seperated by a comma
                echo '<h6>' . implode(', ', $result) . '</h6>';
                    
            } else {
                echo '';
            }
            
            ?>
    	
    	</button>
    	<section dir="dbCols" class="panel">
    		<p>What columns do you want displayed?
                <span class="err"><?php echo isset($data['selected_columns_err']) ? $data['selected_columns_err'] : ''; ?></span></p>
    		<form action="" method="post">
               
                
    		    <?php
                    // Hide undefined index:columns when not yet selected
                    if(isset($data['columns'])):
                ?>
    		    
				<?php
                    // Loop through columns and create checkboxes
                    foreach($data['columns'] as $column) :
                ?>
				
				<label class="checkbox-container">
				
				<?php echo $column->COLUMN_NAME; ?>
				
					<input type="checkbox" name="queried_columns[]" class="queried_columns" value="<?php echo $column->COLUMN_NAME; ?>"<?php
                           
                           // Check checkbox if previously checked
                           if(isset($data['selected_columns'])){
                               if(in_array($column->COLUMN_NAME, $data['selected_columns'])){
                                   echo 'checked';
                                   // if not previous checked, do nothing
                               } else {
                                   echo '';
                               } 
                           }?>>
					
			  		<span class="checkmark"></span>
				</label>
				<?php endforeach; ?>
                <?php endif; ?>
                
   				<br>
				<div>
				    <button type="submit" name="create_table">Generate Table</button>
					<input type="button" id="check_all" value="Check All">
				</div>
				
    		</form>
    	</section>
    	
    </div>
    
<?php require APPROOT . '/views/inc/footer.php' ?>