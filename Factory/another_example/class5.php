<?php
error_reporting(E_ALL);

class Driver
{
    // The parameterized factory method
    public static function factory($type)
    {
        if (include_once 'Drivers/' . $type . '.php') {
            $classname = $type;
            return new $classname;
        } else {
            throw new Exception ('Driver not found');
        }
    }
}

// Load a MySQL Driver
$mysql = Driver::factory('MySQL');

// Load a SQLite Driver
$sqlite = Driver::factory('SQLite');
*/
?>
