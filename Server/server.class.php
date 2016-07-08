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
		
		static function Command($command, $target)
		{
			$target = NULL;
			$serverCommands = array("kick");
			if(in_array($command, $serverCommands))
			{
				switch($serverCommands)
				{
					default: // This is an example of command
					{
						if(isset($target)) 
						{
							shell_exec("kick ".$target);
						}
						else
						{
							shell_exec("notify-send 'Please insert a target !'");
						}
					}
				}
			}
		}
	}
?>	
