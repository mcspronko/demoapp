<?php

declare(strict_types=1);

use Pronko\App;

require_once 'vendor/autoload.php';

$application = new App();

$response = $application->run();

echo $response;
