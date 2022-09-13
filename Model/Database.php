<?php

class Database
{
    protected $connection = null;

    public function __construct()
    {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

            if (mysqli_connect_errno()) {
                throw new Exception("Couldn't connect to database.");
            }
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function select($query = "", $params = [])   
    {
        try {
            $statement   = $this->executeStatement($query, $params);
            $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
            $statement->close();

            return $result;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return false;
    }

    public function executeStatement($query = "", $params = []) 
    {
        try {
            $statement   = $this->connection->prepare($query);

            if ($statement === false) {
                throw new Exception("Unable to execute prepared statement: " . $query);
            }

            if ($params) {
                $statement->bind_param($params[0], $params[1]);;
            }

            $statement->execute();

            return $statement;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }

        return false;
    }
}