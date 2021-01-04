<?php

class tmdbMovieCredits extends tmdbRequest {
	public function
	__construct(string $movie_id, ?callable $proxy = null)
	{
                parent::__construct (
			path: 'movie/'.$movie_id.'/credits',
			// parms not considered by the api
			// parms: [ 'language' => $language ],
			proxy: $proxy
		);
	}
}
?>
