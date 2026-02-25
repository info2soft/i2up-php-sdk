<?php
namespace i2up\common\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class Notifications {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;

    public function __construct($auth)
    {
        $this -> url = $auth -> ip;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 消息接收管理-更新更多配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateNotifyConf(array $body = array())
    {
        $url = $this -> url . '/sys/settings/notify_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消息接收管理-获取配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNotifyConf(array $body = array())
    {
        $url = $this -> url . '/sys/settings/notify_conf';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消息 添加
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addNotifications(array $body = array())
    {
        $url = $this -> url . '/notifications';
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
        $url = $this -> url . '/vers/v3/notifications';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消息 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeNotifications(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/notifications/' . $body['uuid'];
        unset($body['uuid']);
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
        $url = $this -> url . '/notifications/count';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 消息 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readNotifications(array $body = array())
    {
        $url = $this -> url . '/vers/v3/notifications/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消息 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function playNotifications(array $body = array())
    {
        $url = $this -> url . '/vers/v3/notifications/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消息 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNotifications(array $body = array())
    {
        $url = $this -> url . '/vers/v3/notifications';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 配置 获取
     * 
     * @return array
     */
    public function describeNotificationsConfig()
    {
        $url = $this -> url . '/notifications/config';
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
        $url = $this -> url . '/notifications/config';
        $res = $this -> httpRequest('put', $url, $body);
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
        $url = $this -> url . '/notifications/sms_test';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/notifications/email_test';
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
        $url = $this -> url . '/notifications/reset_notify_times';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 邮件模板 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEmailTemplate(array $body = array())
    {
        $url = $this -> url . '/notifications/template';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 邮件模板 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyEmailTemplate(array $body = array())
    {
        $url = $this -> url . '/notifications/template/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
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
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}