<?php
$method = 'wall.post';
$token = $_POST['tkn'];
$version = 5.131;

$params = http_build_query([
    'owner_id' => $_POST['id'],
    'friends_only' => $_POST['friends'],
    'message' => $_POST['message'],
    'attachments' => $_POST['attachments'],
    'guid' => $_POST['guid']
]);

$url = "https://api.vk.com/method/{$method}?{$params}&access_token={$token}&v={$version}";
$result = json_decode(file_get_contents($url), true);
$orders = $result['error']['items'];
print_r($result);
?>
