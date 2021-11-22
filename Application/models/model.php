<?php
    class model {
        function __construct($tableName){

            $this->id = 0;
            $this->tableName = $tableName;
            $this->connect();
        }


        private function connect(){
            // connection of database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blog";
            $this->conn = new mysqli($servername, $username, $password , $dbname);

        }

        function findAll(){
            
            $sql = "SELECT * FROM $this->tableName";
            $result = $this->conn->query($sql);
            return $result;
        }

        function findById($id){
            $sql = "SELECT * FROM $this->tableName WHERE id = $id";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            return $row;

        }
        function insert($data){
          
            foreach($data as $key => $value){
                $dataColumnKeys[] = $key;
                $dataColumnValues[] = $value;
            }
            $mysql = "INSERT INTO $this->tableName (" . implode(',', $dataColumnKeys) . ") VALUES ('" . implode("','", $dataColumnValues) . "')";
            $this->conn->query($mysql);
            
            return $this->conn->insert_id;

        }
        function update(){
              /*
                put your generic UPDATE query here
            */
        }
        function delete(){

        }
    }
