<?php

use Classes\CSVParser;
use Classes\JsonParser;

require 'vendor/autoload.php';

$ext = 'csv';

$filename = 'src/uploads/to_upload.'.$ext;
$content  = file_get_contents($filename);
switch ( $ext ) {
    case 'json';
        $parser = new JsonParser($content);
        break;
    case 'csv';
        $parser = new CSVParser($content);
        break;
}
echo $parser->render();

