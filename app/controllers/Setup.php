<?php

	# Controller

    class Setup extends Controller {
		
		// Load model
        public function __construct(){
            
            $this->dbConnectModel = $this->model('dbConnect');
        }
		
        public function index(){
			
            $app = 'DataTable Configurator';
			$title = $app . ' | Setup';
            
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			// Check for POST
			if(isset($_POST['connect_db'])){
				
								
				$data = [
                	'title'	   => $title,
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $_SESSION['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					
					// errors
					'db_host_err' => '',
					'db_name_err' => '',
					'db_user_err' => '',
					'db_pass_err' => ''
            	];
															
				// Validate fields
				if(empty($data['db_host'])){
					$data['db_host_err'] = REQUIREDMSG;
				}
				
				if(empty($data['db_name'])){
					$data['db_name_err'] = REQUIREDMSG;
				}
				
				if(empty($data['db_user'])){
					$data['db_user_err'] = REQUIREDMSG;
				}	
				// Make sure errors are empty before processing form
				if(empty($data['db_host_err'] || $data['db_name_err'] || $data['db_user_err'])){

					$data = [
						'title'	   => $title,
						'db_host'  => $data['db_host'],
						'db_name'  => $data['db_name'],
						'db_user'  => $data['db_user'],
						'db_pass'  => $data['db_pass'],
            		];
					
					// Connect to and query database
					$_SESSION['tables'] = $this->dbConnectModel->queryTables($data);
					
					// Update data w/ $_SESSION['tables]
					$data = [
						'title'	   => $title,
						'db_host'  => $data['db_host'],
						'db_name'  => $data['db_name'],
						'db_user'  => $data['db_user'],
						'db_pass'  => $data['db_pass'],
						// Updated
						'tables'   => $_SESSION['tables']
            		];
					
					$this->view('setup/index', $data);
					
				} else {
					// Load view w/ errors
					$this->view('setup/index', $data);
				}
				
			// Select table
			} elseif(isset($_POST['db_table'])){
													
				$data = [
                	'title'	   => $title,
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $_SESSION['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					'db_table' => $_SESSION['db_table'],
					'tables'   => $_SESSION['tables']
            	];
				
				// Set Session
				$_SESSION['db_table'] = $data['db_table'];
				
				$data = [
                	'title'	   => $title,
					'db_host'  => $data['db_host'],
					'db_name'  => $data['db_name'],
					'db_user'  => $data['db_user'],
					'db_pass'  => $data['db_pass'],
					'tables'   => $data['tables'],
					'db_table' => $_SESSION['db_table'],
            	];
				
				// Query columns
				$_SESSION['columns'] = $this->dbConnectModel->queryCols($data);
				
				// Display Columns
				$data = [
                	'title'	   => $title,
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $data['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					'db_table' => $data['db_table'],
					'tables'   => $_SESSION['tables'],
					'columns'  => $_SESSION['columns']
            	];
				
								
				$this->view('setup/index', $data);
				
            // Select Cols
			} elseif(isset($_POST['create_table'])){
				
				$data = [
                	'title'	   => $title,
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $_SESSION['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					'db_table' => $_SESSION['db_table'],
					'tables'   => $_SESSION['tables'],
					'columns'  => $_SESSION['columns'],
                    'selected_columns' => $_SESSION['selected_columns'],
                    
                    // errors
                    'selected_columns_err' => ''
            	];
                
                if(empty($data['selected_columns'])){
					$data['selected_columns_err'] = 'Minimum 1 column required.';
				}	
				// Make sure errors are empty before processing form
				if(empty($data['selected_columns_err'])){

					$data = [
                        'title'	   => $title,
                        'db_host'  => $_SESSION['db_host'],
                        'db_name'  => $_SESSION['db_name'],
                        'db_user'  => $_SESSION['db_user'],
                        'db_pass'  => $_SESSION['db_pass'],
                        'db_table' => $_SESSION['db_table'],
                        'tables'   => $_SESSION['tables'],
                        'columns'  => $_SESSION['columns'],
                        'selected_columns' => $_SESSION['selected_columns']
            		];
                    
				// Query rows
				$_SESSION['rows'] = $this->dbConnectModel->queryRows($data);
				
				$data = [
                	'title'	   => $app . ' | ' . $data['db_table'],
					'db_host'  => $data['db_host'],
					'db_name'  => $data['db_name'],
					'db_user'  => $data['db_user'],
					'db_pass'  => $data['db_pass'],
					'db_table' => $data['db_table'],
					'tables'   => $data['tables'],
					'columns'  => $data['columns'],
                    'selected_columns' => $data['selected_columns'],
					'rows'     => $_SESSION['rows'],
                    'extensions'  => isset($_SESSION['extensions']) ? $_SESSION['extensions'] : null
            	];
					
					$this->view('setup/table', $data);
					
				} else {
					// Load view w/ errors
					$this->view('setup/index', $data);
				}    
				
            // Select DataTable extensions and Create Table        
			} elseif(isset($_POST['configure_table'])){
                				
				$data = [
                	'title'	   => $app . ' | ' . $_SESSION['db_table'],
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $_SESSION['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					'db_table' => $_SESSION['db_table'],
					'tables'   => $_SESSION['tables'],
					'columns'  => $_SESSION['columns'],
                    'selected_columns' => $_SESSION['selected_columns'],
					'rows'     => $_SESSION['rows'],
                    'extensions'  => $_SESSION['extensions']
            	];
				
				$this->view('setup/table', $data);
				
			} elseif(isset($_POST['back_btn'])){
				$data = [
                	'title'	   => $title,
					'db_host'  => $_SESSION['db_host'],
					'db_name'  => $_SESSION['db_name'],
					'db_user'  => $_SESSION['db_user'],
					'db_pass'  => $_SESSION['db_pass'],
					'db_table' => $_SESSION['db_table'],
					'tables'   => $_SESSION['tables'],
					'columns'  => $_SESSION['columns'],
                    'selected_columns' => $_SESSION['selected_columns'],
                    'rows'     => $_SESSION['rows'],
                    'extensions'  => isset($_SESSION['extensions']) ? $_SESSION['extensions'] : null
            	];
				
				$this->view('setup/index', $data);
			} else {
				// Unprocessed form
				$data = [
                	'title'   => $title,
					'db_host' => '',
					'db_name' => '',
					'db_user' => '',
					'db_pass' => '',
					'db_table' => '',
					
					// errors
					'db_host_err' => '',
					'db_name_err' => '',
					'db_user_err' => '',
					'db_pass_err' => ''
            	];
                
                // Destroy past sessions on first page load
                $_SESSION = array();
                session_destroy();

				
				// Load view
				$this->view('setup/index', $data);
			}
     
        }
    }