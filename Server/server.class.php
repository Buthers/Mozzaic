<?php
	class Server
	{
		static function Start()
		{
			shell_exec("nohup ./samp03svr &");
			OnServerStarted();
		}
		
		static function Stop()
		{
			shell_exec("killall samp03svr");
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
		
		static function Command($command)
		{
			global $serverCommands;
			if(in_array($command, $serverCommands))
			{
				switch($serverCommands)
				{
					
				}
			}
		}
	}
?>	
