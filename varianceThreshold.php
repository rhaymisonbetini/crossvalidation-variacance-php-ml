<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\FeatureSelection\VarianceThreshold;

$samples = [[0, 1, 2], [4, 1, 0], [1, 4, 0], [0, 1, 6]];

$variance = new VarianceThreshold;
$variance->fit($samples);
$result   = $variance->transform($samples);

foreach ($samples as $sample) {
    echo "[" . $sample[0] . "," . $sample[1] . "]";
}
