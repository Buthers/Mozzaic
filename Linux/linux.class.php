<?php
	class Linux
	{
		static function wget($target)
		{
			return shell_exec("wget ".$target);
		}
		
		static function tar($target)
		{
			return shell_exec("tar -zxf ".$target);
		}
		
		static function cd($target)
		{
			return shell_exec("cd ".$target);
		}
	}
?>
