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
            if(is_array($id)){

                foreach($id as $key => $value){
                    $dataColumnKeys = $key;
                    $dataColumnValues = $value;
                }
                $result = $this->conn->query("SELECT * FROM $this->tableName WHERE $dataColumnKeys = $dataColumnValues");
                return $result;

            } else {
            $result = $this->conn->query("SELECT * FROM $this->tableName WHERE id = $id");
            $row = $result->fetch_assoc();
            return $row;
            }
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

        function findByCategoryName($categoryName){
            $result = $this->conn->query("SELECT category_types.name 
            FROM category_types INNER JOIN blogpost_categories ON category_types.id = blogpost_categories.category_id INNER JOIN
            blog_post ON blog_post.id WHERE category_types.name = $categoryName");

            return $result;
        }
        function update(){
              /*
                put your generic UPDATE query here
            */
        }
        function delete(){

        }
    }
