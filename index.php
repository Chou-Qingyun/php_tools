<?php
// 1.初始化
$ch = curl_init();
//2.设置选项，包括url
curl_setopt($ch, CURLOPT_URL, "http://www.baidu.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //将curl_exec()获取的信息以文件流的形式返回，而不是直接输出
curl_setopt($ch, CURLOPT_HEADER, 1); //启用时会将头文件的信息作为数据流输出
//3.执行并获取HTML文档内容
$output = curl_exec($ch);
//检测cURL错误
if ($output === false) {
    echo "cURL Error: " . curl_error($ch);
}
$info = curl_getinfo($ch);
var_dump($info);
//4.释放cURL句柄
curl_close($ch);
//echo $output;

