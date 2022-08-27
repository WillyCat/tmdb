<?php

class tmdbRequest extends tmdbHttpRequest {
	public $source;

	public function
	__construct (string $path, array $parms = [ ], ?callable $proxy = null, string $keyfile = '')
	{
		$keyvalues = [ ];
		foreach ($parms as $key => $value)
			$keyvalues[] = $key . '=' . rawurlencode($value);
		$cgi = implode ('&', $keyvalues);
		if ($cgi != '')
			$path .= '?' . $cgi;

		if (is_null ($proxy))
			parent::__construct ($path, keyfile: $keyfile);
		else
		{
			$this -> body = $proxy('query', $path, null);
			if ($this -> body == null)
			{
				parent::__construct ($path, keyfile: $keyfile);
				$this -> source = 'api';
				$proxy('store', $path, $this -> body);
			}
			else
			{
				$this -> source = 'db';
				$this -> response = json_decode ($this -> body);
			}
		}
	}

}

?>
