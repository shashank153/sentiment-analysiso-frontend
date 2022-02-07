<?php
require_once('TwitterAPIExchange.php');

$hashtag = $_GET["q"];

$settings = array(
    'oauth_access_token' => "1469261903440408577-wPaSEe1ZXn5EMq8ud1KCVxRnrpmWmI",
    'oauth_access_token_secret' => "T6IUyFXZXmAOrkLVXa18yUSHOeDoeiZaNedXYyuaLhNXG",
    'consumer_key' => "8hLPWuJraO8yaJj5DuE5xrAI3",
    'consumer_secret' => "J0mqDWdy40MgKX6djWSqHc7CFLL9rpdLNXz8pQDYnQqsU7gV67"
);

$url = 'https://api.twitter.com/2/tweets/search/recent';
$getfield = '?q=';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
     ->buildOauth($url, $requestMethod)
     ->performRequest();

echo $response;
?>