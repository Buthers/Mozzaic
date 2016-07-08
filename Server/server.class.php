<?php
	class Server
	{
		static function Start()
		{
			OnServerStarted();
		}
		
		static function Stop()
		{
			OnServerStoped();
		}
		
		static function GetInfo($info)
		{
			global $serverInfo;
			if(array_key_exists($info, $serverInfo))
			{
				return $serverInfo[$info];
			}
			else
			{
				return 0;
			}
		}
	}
?>	
