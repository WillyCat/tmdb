<?php
class tmdbMovieImages extends tmdbRequest {
        public function
        __construct(int $movie_id)
        {
                parent::__construct ('movie/'.$movie_id.'/images');
        }
}
?>
