<?php

    /**
     * 发起http post请求(REST API), 并获取REST请求的结果
     * @param string $url
     * @param string $param
     * @return - http response body if succeeds, else false.
     */
    function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        // 初始化curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $postUrl);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // post提交方式
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        // 运行curl
        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }

    $token = '24.498448712053d9185155c5b6a51b2efc.2592000.1594990078.282335-20457462';
    $url = 'https://aip.baidubce.com/rest/2.0/image-classify/v1/realtime_search/similar/search?access_token=' . $token;
    $img = file_get_contents('./images/b2.jpg');
    $img = base64_encode($img);
    $bodys = array(
        'image' => $img
    );
    $res = request_post($url, $bodys);

//var_dump($res);

    $data = json_decode($res);
//for($i=0;$i<=2;$i++){
//    echo $data->result[1]->score;
//}
    $score = $data->result[0]->score;
    $name = $data->result[0]->brief;
//
//    echo $name;
    echo $score;



