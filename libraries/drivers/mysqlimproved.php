<?php

class MysqlImproved_Driver extends Database_Library {

    private $connection;
    private $query;
    private $result;

    public function connect() {
        //Parametros da conexão

         /*  
        //Local
        $host = 'localhost';
        $user = 'root';
        $password = '[n@da123]';
        $database = 'Talentu';
       */
             
        //Externo
        $host = 'IP';
        $user = 'usuario';
        $password = 'senha';
        $database = 'database';
        
        $port = 3306;
        $socket = NULL;
  
        
        //Cria nova conexão MySql
        $this->connection = new mysqli
        (
            $host, $user, $password, $database, $port, $socket
        );

        return TRUE;
    }

    public function disconnect() {
        //clean up connection!
        $this->connection->close();

        return TRUE;
    }

    public function prepare($query) {
        //store query in query variable
        $this->query = $query;

        return TRUE;
    }

    
    public function escape($data) {
        return $this->connection->real_escape_string($data);
    }


    public function query() {
        if (isset($this->query)) {
            //execute prepared query and store in result variable
            $this->result = $this->connection->query($this->query);

            return TRUE;
        }

        return FALSE;
    }

    public function insert() {
        if (isset($this->result)) {
           return $this->connection->insert_id;
        }
    }
    
    public function fetch($type = 'object') {
        if (isset($this->result)) {
            switch ($type) {
                case 'array':
                    //fetch a row as array                    
                    $row = array();
                    while ($parameters = $this->result->fetch_assoc()) {
                      $row[] = $parameters;
                    }
                    
                    break;

                case 'object':
                    //fall through...
                    break;

                default:
                    //fetch a row as object
                    $row = $this->result->fetch_object();
                    break;
            }
            return $row;
        }

        return FALSE;
    }

}