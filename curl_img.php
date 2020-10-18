<?php
    function img_download($url, $path="") {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $output = curl_exec($ch);

        $info = curl_getinfo($ch);
        curl_close($ch);
        if ($path) {
            $filename = $path;
        } else {
            $tmparr = explode('.', $url);
            $ext = array_pop($tmparr);
            $filename = microtime() . ".{$ext}";
        }
        file_put_contents($filename, $output);
        $size = filesize($filename);
        if ($size != $info['size_download']) {
            echo "下载数据不完整";
        } else {
            echo "下载数据完整";
        }
    }
    $url = "https://www.baidu.com/img/flexible/logo/pc/result.png";
    img_download($url);
