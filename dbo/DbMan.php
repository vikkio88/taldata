<?php

namespace Dbo;

class DbMan
{
    protected $db = null;

    public function getDb()
    {
        $configs = include "config/database.php";
        
        if(empty($this->db)){
            $db = null;
            try {
                $pdo_options = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                $db = new \PDO('mysql:host=' . $configs[ENV]['host'] . ';dbname=' . $configs[ENV]['dbname'], $configs[ENV]['user'], $configs[ENV]['pass'], $pdo_options);
            } catch (Exception $e) {
                exit('Error : ' . $e->getMessage());
            }
            $this->db = $db;
        }
            return $this->db;
        
    }

    public function simpleQuery($queryString)
    {
        $db = $this->getDb();
        $rs = $db->query($queryString);
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function prepareExecuteQuery($query, $params)
    {
        $db = $this->getDb();
        $stmt = $db->prepare($query);
        
        foreach ($params as $key => $conf) {
            $stmt->bindParam($key, $conf[0], $conf[1]);
        }
        
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


}