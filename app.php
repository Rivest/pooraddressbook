<?php
require_once 'config.php';

class App
{
    
    public $title = 'AddressBookXRC';
    
    public $checkboxVisibile = true;
    
    private static $conn = null;
    
    public static function connectDB()
	{
		// One connection through whole application
		if (null == self::$conn)
		{
			try
			{
                var_dump(Config::$dbHost);
				self::$conn = new PDO("mysql:host=".Config::$dbHost.";"."dbname=".Config::$dbName, 
                                      Config::$dbUser, 
                                      Config::$dbPass); 
			} 
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		return self::$conn;
	}

	public static function disconnectDB()
	{
		self::$conn = null;
	} 
    /* 
CREATE USER 'addressbook'@'%' IDENTIFIED BY '***';GRANT USAGE ON *.* TO 'addressbook'@'%' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `addressbook`;GRANT ALL PRIVILEGES ON `addressbook`.* TO 'addressbook'@'%';     
    */
}




$app = new App();
$app->connectDB(); //conf params force convention dbname = dbuser = dbpass
