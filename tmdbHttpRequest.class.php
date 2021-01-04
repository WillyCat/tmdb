<?php

class tmdbHttpRequest {
	public int $status;
	public ?string $body;
	public Object $response;

	public function
	__construct(string $path)
	{
//echo 'path: ' . $path . "\n";
                $url = tmdb::$endpoint . '/'.$path;
//echo $url . "\n";
		if (strpos ($url, '?'))
			$url .= '&';
		else
			$url .= '?';
		$url .= 'api_key=' . tmdb::$api_key;
		$h = new tinyHttp ($url, tinyHttp::METHOD_GET);

		$r = $h -> send();
		$this -> status = $r -> getStatus();
//echo $url . "\n";
//echo 'status: ' . $this->status . "\n";
		$this -> body = $r -> getBody();
		$this -> response = json_decode ($this -> body);
		switch ($this -> status)
		{
		case 401 :
		case 404 :
			throw new Exception ($this -> response -> status_message, $this -> response -> status_code);
			break;
		case 200 :
			if (property_exists ($this -> response, 'errors'))
				throw new Exception ('error: ' . $this -> reponse -> errors[0]);
			break;
		default :
			throw new Exception ('Unexpected HTTP code: ' . $this -> status);
			break;
		}
	}

	public function
	getResponse(): Object
	{
		return $this -> response;
	}
}

?>
