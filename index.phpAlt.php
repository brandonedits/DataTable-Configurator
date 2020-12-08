<?php

  $pageTitle = 'DataTable Configurator | Setup';
  include 'inc/header.php';

?>

        <!-- SERVER and DATABASE -->
        <button class="toggle index-toggle mt-4 active">Server and Database</button>
        <section id="db" class="panel">
        
          <p>What database do you want to connect to?</p>
          <form id="database" action="" method="post">
            <div class="row mb-2">
              <label for="dbHost" class="col-2 col-form-label">Host</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dbHost" value="localhost">
              </div>
            </div>

            <div class="row mb-2">
              <label for="dbName" class="col-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dbName" value="word_find">
              </div>
            </div>

            <div class="row mb-2">
              <label for="dbUsername" class="col-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dbUsername" value="root">
              </div>
            </div>

            <div class="row mb-2">
              <label for="dbPassword" class="col-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dbPassword">
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-sm-2"></div>
              <div class="col pr-1">
                <button type="button" class="btn btn-dark btn-block">Connect</button>
              </div>

              <div class="col pl-1">
                  <button type="button" class="btn btn-dark btn-block">Reset</button>
              </div>
            </div>
          </form>

          <form id="table" class="" action="" method="post">
            <div class="row mb-2">
              <label for="table" class="col-sm-2 col-form-label">Table</label>
              <div class="col-sm-10">
                <select class="form-control" id="table">
                  <option value="">users</option>
                  <option value="">schools</option>
                  <option value="">books</option>
                </select>
              </div>
            </div>
          </form>

          <form id="columns" class="" action="" method="post">
            <div class="row mb-2">
              <label for="columns" class="col-2 col-form-label">Columns</label>
              <div class="col-sm-5 mt-3">
                <label class="checkbox-container">puzzle_id				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="puzzle_id">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container"> cat_id				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="cat_id">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">title				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="title">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">description				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="description">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">user_id				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="user_id">
                  <span class="checkmark"></span>
                </label>

                <label class="checkbox-container">word_bank			
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="user_id">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-sm-5 col-sm mt-3">
                <label class="checkbox-container">word_direction			
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="puzzle_id">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container"> height
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="cat_id">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">width				
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="title">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">share_chars			
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="description">
                  <span class="checkmark"></span>
                </label>
                        
                <label class="checkbox-container">filler_char_types			
                  <input type="checkbox" name="queried_columns[]" class="queried_columns" value="user_id">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-sm-2"></div>
              <div class="col pr-1">
                <button type="button" class="btn btn-dark btn-block">Generate Table</button>
              </div>

              <div class="col pl-1">
                  <input type="button" id="checkAll" class="btn btn-dark btn-block" value="Check All">
              </div>
            </div>
          </form>
        
        </section>

        <!-- DataTable -->
        

<?php

  include 'inc/footer.php';

?>