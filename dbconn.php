<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->
    withServiceAccount('YOUR JSON FIle ')   //put yout json file name from current directory
    ->withDatabaseUri('Your database URL'); //put your databse url inside it function
$database = $factory->createDatabase();

?>