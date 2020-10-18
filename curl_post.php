<?php

function curl_post_data($url, $post_data) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
    $url = "http://php.cn/test.php";
    $post_data = array(
        'foo' => 'bar',
        'query' => 'php',
        "action" => 'submit'
    );

    $result = curl_post_data($url, $post_data);
    var_dump($result);

