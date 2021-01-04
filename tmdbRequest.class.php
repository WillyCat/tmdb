<?php

class tmdbRequest extends tmdbHttpRequest {
	public function
	__construct (string $path, array $parms = [ ], ?callable $proxy = null)
	{
		$keyvalues = [ ];
		foreach ($parms as $key => $value)
			$keyvalues[] = $key . '=' . $value;
		$cgi = implode ('&', $keyvalues);
		if ($cgi != '')
			$path .= '?' . $cgi;

		if (is_null ($proxy))
			parent::__construct ($path);
		else
		{
			$this -> body = $proxy('query', $path, null);
			if ($this -> body == null)
			{
				parent::__construct ($path);
				$proxy('store', $path, $this -> body);
			}
			else
				$this -> response = json_decode ($this -> body);
		}
	}

}

?>
