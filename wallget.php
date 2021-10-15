<?php
$method = 'wall.get';
$token = $_POST['tkn'];
$version = 5.131;

$params = http_build_query([
    'owner_id' => $_POST['id'],
    'access_token' => $token,
]);

$url = "https://api.vk.com/method/{$method}?{$params}&access_token={$token}&v={$version}";
$result = json_decode(file_get_contents($url), true);
$orders = $result['response']['items'];
print_r($orders);
?>
