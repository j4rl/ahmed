<?php
    //Set language
    require_once "settings.php";
    require_once "//lang//"+$strLang+".php";
    $debug="//lang//"+$strLang+".php";

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