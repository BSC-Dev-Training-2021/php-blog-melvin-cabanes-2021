<?php
    class model{

        function __construct($tableName){

            $this->id = 0;
            $this->tableName = $tableName;
            $this->connect();
        }

        private function connect(){
            
            $this->con = new mysqli("localhost","root","","blog");
           
     
        }

        function findAll(){
            /*
                put your generic SELECT query here
            */
            $sql = "SELECT * FROM $this->tableName";
            $rows = $this->con->query($sql);
            $result = [];

            if ($rows->num_rows > 0) {
                // display data from the query
                while($row = $rows->fetch_assoc()) {
                $result[] = $row;
                }
              
            } 
            return $result;

        }  

        function findBy($id){
            $sql = "SELECT * FROM $this->tableName WHERE id = $id";
            $row = $this->con->query($sql);
            $result = [];

            if ($row->num_rows > 0) {
                // display data from the query
                $row = $row->fetch_assoc();
                $result = $row;
                
            } 


            return $result;
            
        }
        function insert($data){
            
            foreach($data as $key => $value){
                $dataColumnKeys[] =$key;
                $dataColumnValues[] = $value;
            }
            $sql=mysqli_query($this->con,"INSERT INTO ".$this->tableName." (".implode(",",$dataColumnKeys).") VALUES ('".implode("','",$dataColumnValues)."')");

            if ($sql) {
                $this->id = mysqli_insert_id($this->con);
                
           }

        }
        function update($id, $fields){
              /*
                put your generic UPDATE query here
            */
        }


        function delete(){

        }

}

