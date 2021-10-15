<?php
$method = 'messages.send';
$token = $_POST['tkn'];
$version = 5.131;

$params = http_build_query([
    'user_id' => $_POST['id'],
    'peer_id' => $_POST['id'],
    'random_id' => $_POST['rnd'],
    'message' => $_POST['soo']
]);

$url = "https://api.vk.com/method/{$method}?{$params}&access_token={$token}&v={$version}";
$result = json_decode(file_get_contents($url), true);
$orders = $result['error']['items'];
print_r($result);
?>
