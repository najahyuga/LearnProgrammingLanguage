<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name;

$result = MathHelper::sum(10, 10, 10);
echo "Result : $result" . PHP_EOL;