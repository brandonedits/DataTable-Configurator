<?php

    /*
     * PDO Database Class
     * Connect to database
     * Create prepared statements
     * Bind values
     * Return rows and results
     */

    class Database {
        private $host;
        private $user;
        private $pass;
        private $dbname;
        
        // DB Handler
        private $dbh;
        private $stmt;
        private $error;
        
        
        // Constructor
        public function __construct(){
			
			$this->host   = isset($_SESSION['db_host']) ? $_SESSION['db_host'] : 'localhost';
			$this->user   = isset($_SESSION['db_user']) ? $_SESSION['db_user'] : 'root';
			$this->pass   = isset($_SESSION['db_pass']) ? $_SESSION['db_pass'] : '';
			$this->dbname = isset($_SESSION['db_name']) ? $_SESSION['db_name'] : null;
            
            // Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				// Prevent memory leak
				PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false
            );
            
            // Create PDO instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
				$this->dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
            
        }
        
        // Prepare STMT w/ query
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }
        
        // Bind values
        public function bind($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                
                    case is_bool($value):
                        $type = PDO::PARAM_Null;
                        break;
                
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
        
        $this->stmt->bindValue($param, $value, $type);
        
        }
        
        // Execute the prepared STMT
        public function execute(){
            return $this->stmt->execute();
        }
                    
        // Get result set as array of objects
        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
		
        // Get single record as object
        public function single(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        
        // Get row count
        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }