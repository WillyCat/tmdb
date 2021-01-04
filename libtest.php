<?php

set_include_path(get_include_path() . ':' . '/Users/fh/classes/prod' );
include 'tinyHttp.class.php';
//include 'tmdbProxy.class.php';
//include 'tmdb.class.php';

set_include_path(get_include_path()
        . ':' . '/Users/fh/classes/prod'
);

include 'autoloader.php';
spl_autoload_register ('myautoloader');

function
proxy(string $action, string $path, ?string $value = ''): ?string
{
	echo "proxy(".$action.','.$path.','.$value.") called\n";
	switch ($action)
	{
	case 'query' :
		return null;
	case 'store' :
		return null;
	}
	return null;
}

$movie_id = 4723;
$sep = '-------------------------------------------';

echo $sep . "\n";
echo "tmdbMovieAlternativeTitles" . "\n";
try
{
	$f = new  tmdbMovieAlternativeTitles ($movie_id, 'proxy');
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

echo $sep . "\n";
echo "tmdbMovieAlternativeTitles" . "\n";
try
{
	$f = new  tmdbMovieAlternativeTitles ($movie_id);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

die();

echo $sep . "\n";
echo "tmdbFind" . "\n";
try
{
	$f = new  tmdbFind ('tt0405336');
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

echo $sep . "\n";
echo "tmdbMovie" . "\n";
try
{
	$f = new  tmdbMovie ($movie_id);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

echo $sep . "\n";
echo "tmdbMovieimages" . "\n";
try
{
	$f = new  tmdbMovieimages ($movie_id);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

echo $sep . "\n";
echo "tmdbExternalIds" . "\n";
try
{
	$f = new  tmdbExternalIds ($movie_id);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

echo $sep . "\n";
echo "tmdbSearchMovie" . "\n";
try
{
	$f = new  tmdbSearchMovie ('bienvenue', 1, false);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}

$movie_id = 33336;
echo $sep . "\n";
echo "tmdbMovieCredits" . "\n";
try
{
	$f = new  tmdbMovieCredits ($movie_id);
	$r = $f -> getResponse();
	print_r ($r);
} catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}
?>
