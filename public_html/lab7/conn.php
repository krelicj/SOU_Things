<?php

// Static singleton variation

// Running on OpenShift (production)
		if (isset($_ENV['OPENSHIFT_APP_NAME'])) {
			define("DB_NAME", "lab7");
			define("DB_HOST", $_ENV['OPENSHIFT_MYSQL_DB_HOST']);
			define("DB_USER", $_ENV['OPENSHIFT_MYSQL_DB_USERNAME']);
			define("DB_PASS", $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']);    
		} 
		//nonopenshift/local testing
		else {
			define("DB_NAME", "lab7");
			define("DB_HOST", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");  
		}

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