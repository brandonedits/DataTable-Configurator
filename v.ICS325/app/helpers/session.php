<?php
	session_start();

	$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	if(isset($_POST['db_host'])){
		$_SESSION['db_host'] = trim($_POST['db_host']);
		$_SESSION['db_host'] = $_SESSION['db_host'];
	}

	if(isset($_POST['db_name'])){
		$_SESSION['db_name'] = trim($_POST['db_name']);
		$_SESSION['db_name'] = $_SESSION['db_name'];
	}

 	if(isset($_POST['db_user'])){
		$_SESSION['db_user'] = trim($_POST['db_user']);
		$_SESSION['db_user'] = $_SESSION['db_user'];
	}

	if(isset($_POST['db_pass'])){
		$_SESSION['db_pass'] = trim($_POST['db_pass']);
		$_SESSION['db_pass'] = $_SESSION['db_pass'];
	}

	if(isset($_POST['db_table'])){
		$_SESSION['db_table'] = trim($_POST['db_table']);
		$_SESSION['db_table'] = $_SESSION['db_table'];
	}

    if(isset($_POST['create_table'])){
        if(isset($_POST['queried_columns'])){
            $_SESSION['selected_columns'] = $_POST['queried_columns'];
            $_SESSION['selected_columns'] = $_SESSION['selected_columns'];
        } else {
            $_SESSION['selected_columns'] = null;
        }
    }

    if(isset($_POST['configure_table'])){
        if(isset($_POST['extensions'])){
            $_SESSION['extensions'] = $_POST['extensions'];
            $_SESSION['extensions'] = $_SESSION['extensions'];
            
        } else {
            $_SESSION['extensions'] = null;
            // Set session for default configurations
            $_SESSION['configured'] = false;
        }   
    }