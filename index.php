<?php

declare(strict_types=1);

use Pronko\App;

require_once 'vendor/autoload.php';

$application = new App();

$response = $application->run();

echo "<h1>My First Application Fixed</h1>";
echo "<p>" . $response . "</p>";
