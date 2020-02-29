<?php

namespace i2up\notifications\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;

class Notifications {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'notifications';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 消息 添加
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addNotifications(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消息 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNotifications(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消息 单个
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeNotifications(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 消息 数量
     *
     * @return array
     */
    public function describeNotificationsCount()
    {
        $url = $this -> url . '/count';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 消息 操作  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNotifications(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'delete';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 消息 操作  标记已读
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readNotifications(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'read';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 配置 获取
     *
     * @return array
     */
    public function describeNotificationsConfig()
    {
        $url = $this -> url . '/config';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 配置 更新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateNotificationsConfig(array $body = array())
    {
        $url = $this -> url . '/config';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 邮件测试
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function testNotificationsEmail(array $body = array())
    {
        $url = $this -> url . '/email_test';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 短信测试
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function testNotificationsSms(array $body = array())
    {
        $url = $this -> url . '/sms_test';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 重置通知次数
     *
     * @return array
     */
    public function resetNotificationsTimes()
    {
        $url = $this -> url . '/reset_notify_times';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else if (isset($this -> accessKey)) {
            $header = array(
                'ACCESS-KEY' => $this -> accessKey,
                'SECRET-KEY' => $this -> secretKey
            );
        } else {
            $header = array();
        }
        $ret = null;
        if ($method === 'get') {
            $ret = Client::get($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}