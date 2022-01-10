<?php
$url=explode("/", $_SERVER['REQUEST_URI']);
//print_r($url);
$pageid=array_pop($url);
//echo $pageid;
$routes = [
['url' => '/', 'view' => 'galery.php'],
['url' => '/basket', 'view' => 'basket.php'],
['url' => '/library', 'view' => 'library.php'],
];
foreach($routes as $key) {
if($key['url']==$_SERVER['REQUEST_URI']) {
$view=$key['view'];
}
}
?>










