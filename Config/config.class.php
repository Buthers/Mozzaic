<?php
	class Database
	{
		static function Start($hostname, $dbname, $user, $password)
		{
			try
			{
				$database = new PDO("mysql:host=".$hostname.";dbname=".$dbname, $user, $password);
				$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e)
			{	
				die("<center>Database connection error:<br>".$e->getMessage()."</center>");
			}	
			OnDatabaseStarted();
		}
	}
?>
