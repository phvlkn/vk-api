<?php
$method = 'messages.getHistory';
$token = $_POST['tkn'];
$version = 5.131;

$params = http_build_query([
    'offset' => 0,
    'count' => 200,
    'rev' => 1,
    'user_id' => $_POST['id'],
    'peer_id' => $_POST['id']
]);

$url = "https://api.vk.com/method/{$method}?{$params}&access_token={$token}&v={$version}";
$result = json_decode(file_get_contents($url), true);
$orders = $result['error']['items'];
print_r($result);
?>
