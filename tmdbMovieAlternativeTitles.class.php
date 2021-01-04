<?php
class tmdbMovieAlternativeTitles extends tmdbRequest {
        public function
        __construct(int $movie_id, ?callable $proxy = null)
        {
                parent::__construct (path: 'movie/'.$movie_id.'/alternative_titles', proxy: $proxy);
        }
}
?>
