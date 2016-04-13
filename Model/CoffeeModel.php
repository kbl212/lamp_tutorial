<?php 

require("Entities/CoffeeEntity.php");

class CoffeeModel
{
    //Get all coffee types from the database and return them in an array.
    function GetCoffeeTypes() 
    {
        require 'Credentials.php';
        
        //Open connection and Select database.
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM coffee") or die(mysql_error());
        $types = array();
        
        //Get data from database.
        while ($row = mysql_fetch_array($result))
        {
            array_push($types, $row[0]);
        }
        mysql_close();
        return $types;
    }
}
?>