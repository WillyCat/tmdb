<?php
class tmdbMovie extends tmdbRequest {
        public function
        __construct(int $movie_id, string $language = 'fr-FR', ?callable $proxy = null, $keyfile = '')
        {
                parent::__construct (path: 'movie/'.$movie_id, parms: [ 'language' => $language ], proxy: $proxy, keyfile: $keyfile);
        }
}
?>
