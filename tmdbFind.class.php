<?php
class tmdbFind extends tmdbRequest {
        public function
        __construct(string $external_id, string $external_source = 'imdb_id', ?callable $proxy = null, string $keyfile = '')
        {
                parent::__construct ('find/'.$external_id, [ 'external_source' => $external_source ], proxy: $proxy, keyfile: $keyfile);
        }
}
?>
