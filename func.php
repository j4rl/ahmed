<?php
//--------------------------------------------------Function file, makes stuff happen
    //Set language
    require_once "settings.php";
    require_once "//lang//"+$strLang+".php";
    //Set CSS-files
    $strCSS-color=$colors;
    $strCSS-style="main.css";
    $strCSS-fonts="";


//--------------------------------------------------------------classes and functions
    class Database
    {
        /**
         * Database constructor.
         * @param $host
         * @param $user
         * @param $pass
         * @param $dbs
         */
        public function __construct($host, $user, $pass, $dbs)
        {
                $this->mysqli = mysqli_connect($host, $user, $pass, $dbs);
        }
    
        /**
         * @param $query
         * @return bool|mysqli_result
         */

        public function($query)
        {
            return $this->mysqli->query($query);
        }

    }
?>