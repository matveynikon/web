<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>web.com</title>
</head>
<body>
<?php
require 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
$pageH1 = $crawler->filter('span')->text();
sleep(mt_rand(10, 30));
var_dump($pageH1);
?>
</body>
</html>
