<?php

class tmdbSearchPerson extends tmdbRequest {
	public function
	__construct(string $query, int $page = 1, bool $include_adult = false, $language = 'fr-FR', ?callable $proxy = null, string $keyfile = '')
	{
		if ($query == '')
			throw new Exception('Query cannot be empty');

		if ($page < 1)
			throw new Exception('page must be 1 or greater');

		if ($page > 1000)
			throw new Exception('page must be 1000 or less');

		$parms = [
			'query' => $query,
			'page'  => $page,
			'include_adult' => tmdb::bool2str($include_adult),
			'language' => $language
		];

		parent::__construct ('search/person', $parms, proxy: $proxy, keyfile: $keyfile);

		for ($i = 0; $i < count ($this -> response -> results); $i++)
			if (property_exists ($this -> response -> results[$i], 'profile_path')
			&&  !is_null($this -> response -> results[$i] -> profile_path)
			&&  strlen($this -> response -> results[$i] -> profile_path) > 0)
				$this -> response -> results[$i] -> poster_url = 'http://image.tmdb.org/t/p/original' . $this -> response -> results[$i] -> profile_path;

	}
}
?>
