<?php

	# MODEL - db stuff

	class dbConnect{
		public function __construct(){
            $this->db = new Database;
        }
		
		public function queryTables($data){
			$this->db->query('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = :db_name');
			
			// Bind Values
			$this->db->bind(':db_name', $data['db_name']);
			
			$results = $this->db->resultSet();

            return $results;
		}
		
	
		public function queryCols($data){
			$this->db->query('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = :db_name AND TABLE_NAME = :db_table');
			
			// Bind Values
			$this->db->bind(':db_name', $data['db_name']);
			$this->db->bind(':db_table', $data['db_table']);
			
			$results = $this->db->resultSet();

            return $results;
		}
        
        public function queryRows($data){
			
			$table   = $data['db_table'];
			
            $this->db->query('SELECT * FROM ' . $table);
            $results = $this->db->resultSet();
            
            return $results;
            
		}
        
	}