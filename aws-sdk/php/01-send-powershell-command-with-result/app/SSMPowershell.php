<?php

require_once '../vendor/autoload.php';

use Aws\S3\S3Client;

$s3Client = new S3Client([
  'region' => 'ap-northeast-1',
  'version' => '2006-03-01'
]);

// Listing all S3 Bucket
$buckets = $s3Client->listBuckets();

var_dump($buckets);