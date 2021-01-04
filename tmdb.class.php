<?php

require_once 'tinyHttp.class.php';

class tmdb {
	static string $api_key = '35e920f1275aa3e80df17c162004bc47';
	static string $endpoint = 'https://api.themoviedb.org/3';

	public function
	__construct()
	{
	}

	static function
	bool2str (bool $b): string
	{
		return $b ? 'true' : 'false';
	}

	static function
	getVersion(): string
	{
		return '0.1';
	}
}

?>
