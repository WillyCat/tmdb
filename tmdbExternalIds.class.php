<?php
class tmdbExternalIds extends tmdbRequest {
        public function
        __construct(string $person_id)
        {
                parent::__construct ('person/'.$person_id.'/external_ids');
        }
}
?>
