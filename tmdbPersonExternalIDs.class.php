<?php
class tmdbPersonExternalIDs extends tmdbRequest {
        public function
        __construct(string $tmdb_id, array $parms = [ ], ?callable $proxy = null)
        {
                parent::__construct ('person/'.$tmdb_id.'/external_ids', $parms, proxy: $proxy);
        }
}
?>
