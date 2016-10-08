<?php
/**
 * Created by PhpStorm.
 * User: llicat
 * Date: 2015/12/21
 * Time: 18:12
 */
return array(
    'webUrl' => 'http://localhost:91',
    'smsPrefix' => 'http://192.168.69.103:80',//    'smsPrefix' => 'http://192.168.2.88:7002',
    //商务管理
    'swPrefix' => 'http://192.168.70.246:8008/nbgl2Web/api/swgl',
    //用户中心
    //'yhPrefix' => 'http://10.199.132.234:8090/uc-web/v1',// 'yhPrefix' => 'http://192.168.71.164:8080/uc-web/v1',
//    'yhPrefix' => 'http://192.168.69.103:8090/uc-web/v1',
//    'yhPrefix' => 'http://10.199.132.233:8090/uc-web/v1',
    'yhPrefix' => 'http://10.199.132.233:8090/uc-web/v1',
    //客服平台
    'kfPrefix' => 'http://192.168.150.133/kfpt-gwt',//http://lt.4007112366.com/kfpt-gwt
    'yhSecret' => '9sqJxTwkzv',
    'swddly' => 12,
    '171educpbm' => '20010100010000',
    '171edulyqd' => '171edu',
    'paymentinfo' => array(
        'alipay' => 5,
        'wxpay' => 0,
        'none' => 6,
        'else' => 6
    ),
    //新浪IP接口
    'sinaIpPrefix' => 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json',
    //聚合手机归属接口
    'juheMobilePrefix' => '',
    'singleAreas' => array(
        "4403" => array(
            'fzgsmc' => '深圳'
        ),
        "3306" => array(
            'fzgsmc' => '绍兴'
        ),
        "3502" => array(
            'fzgsmc' => '厦门'
        )
    ),
    'redisurl' => '192.168.70.112',
    //'redisurl' => '192.168.2.137',//192.168.2.137
    //'redisport' => '6389',//6389
    'redisport' => '6379',
    'redispass' => '123456',

    //用户权益开通显示地址
    'rightsSmsMessage' => '亲爱滴用户，您的个人权益和所属企业的权益均已开通，登录账号是您的手机号，密码默认是手机号后6位。开始享用您的专属权益:http://www.171edu.com/my/rights'
);
