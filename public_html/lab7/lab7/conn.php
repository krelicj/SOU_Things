<?php

// Static singleton variation


define("DB_NAME", "usr_krelicj_0");
define("DB_HOST", "webpages.sou.edu");
define("DB_USER", "krelicj");
define("DB_PASS", "FnUV1HX4RS");  

class Database {
private static $conn = NULL;

static function get_connection() {

	    if (self::$conn == NULL) {                  
            self::$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (mysqli_connect_errno()) {
                echo "Failed to connect";
				die;
            }
        }

        return self::$conn;
    }
}