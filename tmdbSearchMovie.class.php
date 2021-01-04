<?php

class tmdbSearchMovie extends tmdbRequest {
	public function
	__construct(string $query, int $page = 1, bool $include_adult = false, $language = 'fr-FR')
	{
		if ($query == '')
			throw new Exception('Query cannot be empty');

		if ($page < 1)
			throw new Exception('page must be 1 or greater');

		if ($page > 500)
			throw new Exception('page must be 500 or less');

		$parms = [
			'query' => $query,
			'page'  => $page,
			'include_adult' => tmdb::bool2str($include_adult),
			'language' => $language
		];

		parent::__construct ('search/movie', $parms);

		for ($i = 0; $i < count ($this -> response -> results); $i++)
			$this -> response -> results[$i] -> poster_url = 'http://image.tmdb.org/t/p/original' . $this -> response -> results[$i] -> poster_path . '?api_key=' . tmdb::$api_key;

	}
}
?>
