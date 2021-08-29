<?php

require_once 'tinyHttp.class.php';

class tmdb {
	var $api_key;
	var $endpoint = 'https://api.themoviedb.org/3';

	public function
	__construct(string $keyfile)
	{
		if (!file_exists ($keyfile))
			throw new Exception ('keyfile not found');
		$this -> api_key = trim(file_get_contents ($keyfile));
	}

	static function
	bool2str (bool $b): string
	{
		return $b ? 'true' : 'false';
	}

	static function
	getVersion(): string
	{
		return '0.2';
	}
}

?>
